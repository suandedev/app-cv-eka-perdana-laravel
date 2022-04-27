<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItemDropDownMenu extends Component
{
    public $title, $href;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $href)
    {
        //
        $this->title = $title;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-item-drop-down-menu');
    }
}
