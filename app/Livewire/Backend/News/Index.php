<?php

namespace App\Livewire\Backend\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';
    public $sortBy = 'id';
    public $sortDirection = 'desc';
    public $perPage = 10;
    public $deleteNewsId = null;

    public function updatingSearch()
    {
        $this->resetPage();
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

    public function delete($newId)
    {
        $this->deleteNewsId = $newId;    
    }

    public function render()
    {
        $news = News::with('user', 'category')
            ->where('title', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.backend.news.index', [
            'newsList' => $news
        ]);
    }

}
