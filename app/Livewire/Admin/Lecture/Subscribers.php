<?php

namespace App\Livewire\Admin\Lecture;

use Livewire\Component;

class Subscribers extends Component
{
    public function render()
    {
        return view('livewire.admin.lecture.subscribers')->extends('components.layouts.app')->section('section');
    }
}
