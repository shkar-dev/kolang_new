<?php

namespace App\Livewire\Admin\Lecture;

use Livewire\Component;

class Course extends Component
{

    public $course;
    public $course_attachments;

    public function render()
    {
        return view('livewire.admin.lecture.course')->extends('components.layouts.app')->section('section');
    }
}
