<?php

namespace App\Livewire\Backend\Page;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use WithFileUploads;

    public $pageId, $page;
    public $title, $slug, $content, $meta_title, $meta_description, $thumbnail, $status, $published_at, $template;

    public $newThumbnail;

    public function mount($pageId = null)
    {
        if ($pageId) {
            $page = Page::findOrFail($pageId);
            $this->page = $page;
            $this->pageId = $page->id;
            $this->title = $page->title;
            $this->slug = $page->slug;
            $this->content = $page->content;
            $this->meta_title = $page->meta_title;
            $this->meta_description = $page->meta_description;
            $this->thumbnail = $page->thumbnail;
            $this->status = $page->status;
            $this->published_at = $page->published_at;
            $this->template = $page->template;
        }
    }

    public function updatedTitle()
    {
        if (!$this->slug) {
            $this->slug = Str::slug($this->title);
        }
    }

    public function saveAsDraft()
    {
        $this->save('draft');
    }

    public function saveAndPublish()
    {
        $this->save('published');
    }

    protected function save($status)
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $this->pageId,
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'newThumbnail' => 'nullable|image|max:1024',
            'template' => 'nullable|string|max:255',
        ]);

        if ($this->newThumbnail) {
            $this->thumbnail = $this->newThumbnail->store('pages', 'public');
        }

        $page = Page::updateOrCreate(
            ['id' => $this->pageId],
            [
                'title' => $this->title,
                'slug' => $this->slug,
                'content' => $this->content,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'thumbnail' => $this->thumbnail,
                'status' => $status,
                'published_at' => $status === 'published' ? now() : null,
                'template' => $this->template,
                'user_id' => auth()->id(),
            ]
        );

        $this->pageId = $page->id;

        session()->flash('success', 'Page saved successfully.');
    }


    public function render()
    {
        return view('livewire.backend.page.manage');
    }
}
