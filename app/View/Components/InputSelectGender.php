<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSelectGender extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $name;

    public function __construct($title, $name, $options = [])
    {
        $this->title = $title;
        $this->name = $name;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-select-gender');
    }
}
