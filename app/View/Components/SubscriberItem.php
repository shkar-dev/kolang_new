<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubscriberItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public function __construct($class="col-4")
    {
        $this->class=$class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.subscriber-item');
    }
}
