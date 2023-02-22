<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class FrontLayout extends Component
{
    public $settings;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->settings = Setting::firstOrFail();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.front-layout');
    }
}
