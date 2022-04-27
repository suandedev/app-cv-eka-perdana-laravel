<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NotificationIcon extends Component
{
    public $id, $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $icon)
    {
        //
        $this->id = $id;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification-icon');
    }
}
