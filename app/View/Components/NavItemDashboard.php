<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItemDashboard extends Component
{
    public $title, $icon, $href;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $icon, $href)
    {
        //
        $this->title = $title;
        $this->icon = $icon;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-item-dashboard');
    }
}
