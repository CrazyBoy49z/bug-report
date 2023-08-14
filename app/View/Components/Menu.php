<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public function __construct(
        public string $color,
    ) {}
    
    public function render(): View
    {
        return view('components.menu');
    }
}
