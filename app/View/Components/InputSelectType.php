<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSelectType extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $name;
    public $content;
    public function __construct($title, $name, $content = '')
    {
        $this->title = $title;
        $this->name = $name;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-select-type');
    }
}
