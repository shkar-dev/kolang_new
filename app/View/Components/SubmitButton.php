<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubmitButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $class;
    public $text;
    public function __construct(  $type, $class, $text)
    {
        $this->type = $type;
        $this->class = $class;
        $this->text = $text;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.submit-button');
    }
}
