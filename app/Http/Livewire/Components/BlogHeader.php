<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class BlogHeader extends Component
{
    public $title;
    public $subtitle;
    public $image;

    public function render()
    {
        return view('livewire.components.blog-header');
    }
}
