<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconCircle extends Component
{
    public $background, $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($background, $icon)
    {
        //
        $this->background = $background;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon-circle');
    }
}
