<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectWithLabel extends Component
{
    public $name;
    public $listdata = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $listdata)
    {
        $this->name = $name;
        $this->listdata = explode(",", $listdata);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-with-label');
    }
}
