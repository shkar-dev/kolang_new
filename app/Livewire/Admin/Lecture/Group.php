<?php

namespace App\Livewire\Admin\Lecture;

use App\Models\Course;
use App\Models\Member;
use Livewire\Component;

class Group extends Component
{

    public $lecturers;
    public $courses;
    public $supervisors;
    public function mount()
    {
        $this->lecturers = Member::where('type', '=', 'lecturer')->get();
        $this->courses = Course::all();
        $this->supervisors = $this->lecturers;
    }
    public function render()
    {
        return view('livewire.admin.lecture.group')->extends('components.layouts.app')->section('section');
    }
}
