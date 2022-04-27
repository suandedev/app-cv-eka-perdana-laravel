<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropDownOnlyIcon extends Component
{
    public $id, $icon, $count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $icon, $count)
    {
        //
        $this->id = $id;
        $this->icon = $icon;
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.drop-down-only-icon');
    }
}
