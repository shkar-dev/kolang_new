<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CloseButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $text;
    public $type;
    public $class;
    public function __construct($text , $type  , $class )
    {
     $this->text = $text;
     $this->type = $type;
     $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.close-button');
    }
}
