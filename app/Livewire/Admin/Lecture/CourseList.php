<?php

namespace App\Livewire\Admin\Lecture;

use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public $courses = [];
    public function boot()
    {
        $this->courses = Course::all();
    }
    public function render()
    {
        return view('livewire.admin.lecture.course-list')->extends('components.layouts.app')->section('section');
    }
}
