<?php

namespace App\Http\Livewire\Components;

use App\Models\Page;
use Livewire\Component;

class NavMenu extends Component
{
    public $navItems;
    public $isHomePage;
    public $logo ;

    public function mount()
    {
        $this->navItems =  Page::all();
        $this->isHomePage = Page::where('is_home_page', true)->first();
    }
    public function render()
    {
        return view('livewire.components.nav-menu');
    }
}
