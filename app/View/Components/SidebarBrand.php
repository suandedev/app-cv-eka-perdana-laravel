<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarBrand extends Component
{
    public $title, $href, $icon, $iconRotate;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $href, $icon, $iconRotate)
    {
        //
        $this->title = $title;
        $this->href = $href;
        $this->icon = $icon;
        $this->iconRotate = $iconRotate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-brand');
    }
}
