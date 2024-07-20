<?php

namespace App\Livewire\Admin\Lecture;

use App\Traits\WithFetchAcademicLevel;
use Livewire\Component;

class Subscribers extends Component
{
    use WithFetchAcademicLevel;
    public $academicLevels;
    public function mount()
    {
        $this->academicLevels = $this->FetchAcademicLevel();
    }
    public function render()
    {
        return view('livewire.admin.lecture.subscribers')->extends('components.layouts.app')->section('section');
    }
}
