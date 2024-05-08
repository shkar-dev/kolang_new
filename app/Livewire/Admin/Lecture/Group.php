<?php

namespace App\Livewire\Admin\Lecture;

use Livewire\Component;

class Group extends Component
{
    public function render()
    {
        return view('livewire.admin.lecture.group')->extends('components.layouts.app')->section('section');
    }
}
