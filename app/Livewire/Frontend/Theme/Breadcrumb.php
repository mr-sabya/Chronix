<?php

namespace App\Livewire\Frontend\Theme;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $title;

    public function mount($title)
    {
        $this->title = $title;    
    }
    
    public function render()
    {
        return view('livewire.frontend.theme.breadcrumb');
    }
}
