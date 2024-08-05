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
    public $content;
    public function __construct($title, $name, $options = [], $content = '')
    {
        $this->title = $title;
        $this->name = $name;
        $this->options = $options;
        $this->content = $content;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-select-academic-level');
    }
}
