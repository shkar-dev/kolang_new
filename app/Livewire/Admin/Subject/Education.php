<?php

namespace App\Livewire\Admin\Subject;

use App\Models\Article;
use App\Traits\WithAdminModalFilter;
use App\Traits\WithFetchAcademicLevel;
use App\Traits\WithFetchSubjectsData;
use Livewire\Attributes\On;
use Livewire\Component;

class Education extends Component
{
    use WithAdminModalFilter, WithFetchAcademicLevel, WithFetchSubjectsData;

    public $data;
    #[On('change-filter')]
    public function filterUsers($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator)
    {
        $this->data =  $this->AdminModalFilter($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator, $this->users);
    }
    public function boot()
    {
        // $this->users = $this->FetchAcademicLevel();
        // $this->filterUsers('', '', 'پەروەردە', '', '', '', '');

    }
    public function mount()
    {
        $this->data =  $this->FetchSubjectsData('پەروەردە');
    }
    public function render()
    {
        return view('livewire.admin.subject.education')->extends('components.layouts.app')->section('section');
    }
}
