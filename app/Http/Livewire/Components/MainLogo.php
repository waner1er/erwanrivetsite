<?php

namespace App\Http\Livewire\Components;

use App\Models\Page;
use App\Models\Setting;
use Livewire\Component;

class MainLogo extends Component
{
    public $slug;
    public $img;

    public function mount()
    {
        $this->slug = Page::where('is_home_page', true)->firstOrFail()->slug;
        $this->img = Setting::firstOrFail()->site_img;
    }

    public function render()
    {
        return view('livewire.components.main-logo');
    }
}
