<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItemDropDown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title, $icon, $dataTarget;
    public function __construct($dataTarget, $title, $icon)
    {
        //
        $this->dataTarget = $dataTarget;
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-item-drop-down');
    }
}
