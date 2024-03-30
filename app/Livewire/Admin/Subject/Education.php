<?php

namespace App\Livewire\Admin\Subject;

use Livewire\Component;

class Education extends Component
{
    public function render()
    {
        return view('livewire.admin.subject.education')->extends('components.layouts.app')->section('section');
    }
}
