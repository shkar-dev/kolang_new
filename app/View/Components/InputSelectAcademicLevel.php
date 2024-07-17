<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSelectAcademicLevel extends Component
{
    public $title;
    public $name;
    public $options;
    public function __construct($title, $name, $options = [])
    {
        $this->title = $title;
        $this->name = $name;
        $this->options = $options;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-select-academic-level');
    }
}
