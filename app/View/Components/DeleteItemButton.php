<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteItemButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $routeName;
    public $id;
    public function __construct($id, $routeName)
    {
        $this->id = $id;
        $this->routeName = $routeName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-item-button');
    }
}