<?php

namespace App\Http\Livewire\Components;

use App\Models\Page;
use App\Models\Setting;
use Livewire\Component;

class NavMenu extends Component
{
    public $navItems;
    public $isHomePage;
    public $logo ;

    public $settings;
    public function mount()
    {
        $this->navItems =  Page::all()->sortBy('ordering_number');
        $this->isHomePage = Page::where('is_home_page', true)->first();
        $this->settings = Setting::firstOrFail();
    }
    public function render()
    {
        return view('livewire.components.nav-menu');
    }
}
