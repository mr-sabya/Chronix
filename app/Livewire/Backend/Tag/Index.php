<?php

namespace App\Livewire\Backend\Tag;

use App\Models\Tag;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads, WithPagination;

    public $tagId;
    public $name, $slug;
    public $searchTerm = '';
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $count = 1;
    public $deleteTagId = null;

    public function mount()
    {
        $this->resetForm();
    }

    public function updatedName($value)
    {
        $slug = Str::slug($value);
        $originalSlug = $slug;
        $counter = 1;

        while (Tag::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        $this->slug = $slug;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => [
                'nullable',
                'string',
                'max:255',
                $this->tagId ? Rule::unique('tags')->ignore($this->tagId) : 'unique:tags',
            ],
        ]);

        $data = [
            'name' => $this->name,
            'slug' => $this->slug ?? Str::slug($this->name), // Automatically generate slug if empty
        ];

        Tag::updateOrCreate(
            ['id' => $this->tagId],
            $data
        );

        $this->dispatch('alert', ['type' => 'success', 'message' => $this->tagId ? 'Tag updated.' : 'Tag created.']);
        $this->resetForm();
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);

        $this->tagId = $tag->id;
        $this->name = $tag->name;
        $this->slug = $tag->slug;
    }

    public function confirmDelete()
    {
        // Delete the tag
        Tag::findOrFail($this->deleteTagId)->delete();
        session()->flash('success', 'Tag deleted.');

        // Close the modal and reset the delete tag ID
        $this->deleteTagId = null;
    }

    public function delete($id)
    {
        $this->deleteTagId = $id;
    }

    public function resetForm()
    {
        $this->reset(['tagId', 'name', 'slug']);
    }

    public function toggleSort($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function render()
    {
        $tags = Tag::query()
            ->where('name', 'like', '%' . $this->searchTerm . '%')
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.tag.index', [
            'tags' => $tags,
        ]);
    }

}
