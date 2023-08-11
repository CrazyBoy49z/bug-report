<?php

namespace App\View\Components\Menu;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    public function render(): View
    {
        return view('components.menu.item');
    }
}
