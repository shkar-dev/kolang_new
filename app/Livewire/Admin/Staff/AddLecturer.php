<?php

namespace App\Livewire\Admin\Staff;

use App\Traits\WithFetchAcademicLevel;
use Livewire\Component;

class AddLecturer extends Component
{
    use WithFetchAcademicLevel;
    public $academicLevel;

    public function mount()
    {

        $this->academicLevel = $this->FetchAcademicLevel();
    }

    public function render()
    {
        return view('livewire.admin.staff.add-lecturer')->extends('components.layouts.app')->section('section');
    }
}
