<?php

namespace App\Http\Livewire\Components\Pictos;

use Livewire\Component;

class SocialNetwork extends Component
{
    public $url;
    public $picto;
    public $name;

    public function render()
    {
        return view('livewire.components.pictos.social-network');
    }
}
