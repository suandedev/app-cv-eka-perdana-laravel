<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserLink extends Component
{

    public $icon, $href;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $href)
    {
        //
        $this->href = $href;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-link');
    }
}
