<?php

namespace App\Livewire\Admin\Subject;

use Livewire\Component;

class Society extends Component
{
    public function render()
    {
        return view('livewire.admin.subject.society')->extends('components.layouts.app')->section('section');
    }
}
