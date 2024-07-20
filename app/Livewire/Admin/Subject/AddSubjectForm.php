<?php

namespace App\Livewire\Admin\Subject;

use App\Models\Staff;
use App\Models\Subject;
use Livewire\Component;

class AddSubjectForm extends Component
{

    public $subjectType;
    public $translator;
    public $writer;

    public function mount()
    {
        $this->subjectType = Subject::all();
        $this->translator = Staff::where('type', '=', 'translator')->get();
        $this->writer = Staff::where('type', '=', 'writer')->get();
    }

    public function render()
    {
        return view('livewire.admin.subject.add-subject-form')->extends('components.layouts.app')->section('section');
    }
}
