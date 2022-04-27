<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropDownOnlyIconsHead extends Component
{
    public $string;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($string)
    {
        //
        $this->string = $string;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.drop-down-only-icons-head');
    }
}
