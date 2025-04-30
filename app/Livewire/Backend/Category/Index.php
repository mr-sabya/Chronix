<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads, WithPagination;

    public $categoryId;
    public $name, $slug, $icon, $image, $parent_id;
    public $existingImage;
    public $searchTerm = '';
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $count = 1;
    public $deleteCategoryId = null;

    public function mount()
    {
        $this->resetForm();
    }

    public function updatedName($value)
    {
        $slug = Str::slug($value);
        $originalSlug = $slug;
        $counter = 1;

        while (Category::where('slug', $slug)->exists()) {
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
                $this->categoryId ? Rule::unique('categories')->ignore($this->categoryId) : 'unique:categories',
            ],
            'parent_id' => 'nullable|exists:categories,id',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = [
            'name' => $this->name,
            'slug' => $this->slug ?? Str::slug($this->name), // Automatically generate slug if empty
            'parent_id' => $this->parent_id,
            'icon' => $this->icon,
        ];

        // Handle image upload
        if ($this->image) {
            $data['image'] = $this->image->store('categories', 'public');
        } elseif ($this->existingImage) {
            $data['image'] = $this->existingImage;
        }

        Category::updateOrCreate(
            ['id' => $this->categoryId],
            $data
        );

        // session()->flash('success', $this->categoryId ? 'Category updated.' : 'Category created.');
        $this->dispatch('alert', ['type' => 'success', 'message' => $this->categoryId ? 'Category updated.' : 'Category created.']);
        $this->resetForm();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        $this->categoryId = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->icon = $category->icon;
        $this->parent_id = $category->parent_id;
        $this->existingImage = $category->image;
    }

    public function confirmDelete()
    {
        // Delete the category
        Category::findOrFail($this->deleteCategoryId)->delete();
        session()->flash('success', 'Category deleted.');

        // Close the modal and reset the delete category ID
        $this->deleteCategoryId = null;
    }

    public function delete($id)
    {
        $this->deleteCategoryId = $id;
    }

    public function resetForm()
    {
        $this->reset(['categoryId', 'name', 'slug', 'icon', 'image', 'parent_id', 'existingImage']);
    }


    public function toggleSort($field)
    {
        // dd($field);
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
        }

        // $this->resetPage(); // <-- Add this
    }

    public function render()
    {
        $categories = Category::query()
            ->whereNull('parent_id')
            ->where('name', 'like', '%' . $this->searchTerm . '%')
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.category.index', [
            'categories' => $categories,
            'allCategories' => Category::whereNull('parent_id')->latest()->get(),
        ]);
    }
}
