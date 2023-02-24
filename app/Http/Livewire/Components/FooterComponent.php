<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class FooterComponent extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = \App\Models\Setting::first();
    }
    public function render()
    {
        return view('livewire.components.footer-component');
    }
}
