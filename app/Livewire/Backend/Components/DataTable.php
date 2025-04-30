<?php

namespace App\Livewire\Backend\Components;

use Livewire\Component;

class DataTable extends Component
{
    public $query;
    public $columns = [];
    public $staticColumns = [];
    public $actions = false;

    public function render()
    {
        $data = $this->query instanceof \Illuminate\Database\Eloquent\Builder
            ? $this->query->paginate(10)
            : collect([]);

        return view('livewire.backend.components.data-table', [
            'rows' => $data,
        ]);
    }
}
