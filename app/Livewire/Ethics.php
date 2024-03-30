<?php

namespace App\Livewire;

use Livewire\Component;

class Ethics extends Component
{
    public function render()
    {
        return view('livewire.ethics')->extends('components.layouts.app')->section('section');;
    }
}
