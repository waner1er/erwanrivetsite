<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class MainHeaderComponent extends Component
{
    public $title;
    public $subtitle;
    public $image;

    public function render()
    {
        return view('livewire.components.main-header-component');
    }
}
