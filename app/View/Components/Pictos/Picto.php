<?php

namespace App\View\Components\pictos;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Picto extends Component
{
    public  $picto;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->picto = collect([
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'linkedin' => 'LinkedIn',
            'github' => 'Github',
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pictos.picto');
    }
}
