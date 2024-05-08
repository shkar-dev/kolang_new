<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeadingSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $isGeneral;
    public function __construct($title,$isGeneral)
    {
        $this->isGeneral=$isGeneral;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.heading-section');
    }
}
