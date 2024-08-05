<?php

namespace App\Livewire\Admin\Subject;

use App\Traits\WithAdminModalFilter;
use App\Traits\WithFetchSubjectsData;
use Livewire\Attributes\On;
use Livewire\Component;

class Article extends Component
{

    use WithAdminModalFilter, WithFetchSubjectsData;
    public $data;
    public $subject;

    #[On('change-filter')]
    public function filterUsers($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator)
    {
        // $this->users =  $this->AdminModalFilter($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator, $this->users);
    }
    public function boot()
    {

        $this->filterUsers('', '', 'وتار', '', '', '', '');
    }
    public function mount()
    {
        $this->data =  $this->FetchSubjectsData('وتار');
    }

    public function render()
    {
        return view('livewire.admin.subject.article')->extends('components.layouts.app')->section('section');
    }
}
