<?php

namespace App\Livewire\Admin\Subject;

use App\Traits\WithAdminModalFilter;
use App\Traits\WithFetchSubjectsData;
use Livewire\Attributes\On;
use Livewire\Component;

class Society extends Component
{
    use WithAdminModalFilter, WithFetchSubjectsData;
    public $data;
    public $subject;

    #[On('change-filter')]
    public function filterUsers($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator)
    {
        // $this->data =  $this->AdminModalFilter($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator, $this->data);
    }
    public function boot()
    {
        $this->filterUsers('', '', 'کۆمەڵگە', '', '', '', '');
    }
    public function mount()
    {
        $this->data =  $this->FetchSubjectsData('کۆمەڵگە');
    }
    public function render()
    {
        return view('livewire.admin.subject.society')->extends('components.layouts.app')->section('section');
    }
}
