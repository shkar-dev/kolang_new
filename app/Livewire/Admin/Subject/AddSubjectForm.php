<?php

namespace App\Livewire\Admin\Subject;

use Livewire\Component;

class AddSubjectForm extends Component
{

    public function render()
    {
        return view('livewire.admin.subject.add-subject-form')->extends('components.layouts.app')->section('section');
    }
}
