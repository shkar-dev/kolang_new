<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $type;
    public $title;
    public $isValid;

    public function __construct(
        $name,
        $title,
        $type,
        $isValid
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->title = $title;
        $this->isValid = $isValid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-text');
    }
}
