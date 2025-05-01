<?php

namespace App\Livewire\Backend\News;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use WithFileUploads;

    public $newsId, $news;
    public $title, $slug, $excerpt, $body, $image, $category_id, $is_trending = false, $published_at;
    public $tag_ids = [];
    public $newImage;
    public string $actionType = 'draft';

    public function mount($newsId = null)
    {
        $this->newsId = $newsId;

        if ($newsId) {
            $news = News::findOrFail($newsId);
            $this->news = $news;
            $this->fill($news->toArray());
            $this->tag_ids = $news->tags->pluck('id')->toArray(); // pre-fill selected tags
            $this->image = $news->image; // keep original image path
        }
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function save(string $action = 'draft')
    {
        $this->actionType = $action;

        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'slug' => ['required', Rule::unique('news', 'slug')->ignore($this->newsId)],
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'is_trending' => 'boolean',
            'newImage' => 'nullable|image|max:2048',
        ]);

        if ($this->newImage) {
            $validated['image'] = $this->newImage->store('news', 'public');
        } else {
            $validated['image'] = $this->image;
        }

        if(!$this->newsId){
            $validated['user_id'] = auth()->id();
        }
        $validated['status'] = $action === 'publish' ? 'published' : 'draft';
        $validated['published_at'] = $action === 'publish' ? now() : null;

        $news = News::updateOrCreate(['id' => $this->newsId], $validated);

        $news->tags()->sync($this->tag_ids);

        $this->dispatch('alert', ['type' => 'success', 'message' => $this->newsId ? 'News updated.' : 'Category created.']);
        return $this->redirect(route('admin.news.index'), navigate:true);
    }


    public function render()
    {
        return view('livewire.backend.news.manage', [
            'categories' => Category::with('children')->whereNull('parent_id')->get(),
            'tags' => Tag::all(),
        ]);
    }
}
