<?php

namespace App\Livewire\Admin\Subject;

use App\Traits\WithAdminModalFilter;
use App\Traits\WithFetchSubjectsData;
use Livewire\Attributes\On;
use Livewire\Component;

class Ethics extends Component
{

    use WithAdminModalFilter, WithFetchSubjectsData;
    public $data = [];
    #[On('change-filter')]
    public function filterUsers($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator)
    {
        // $this->users =  $this->AdminModalFilter($subjectId,$subject, $subjectType, $author, $startDate, $endDate, $translator,$this->users);
    }
    public function boot()
    {
        $this->filterUsers('', '', 'ئەخلاق', '', '', '', '');
    }
    public function mount()
    {
        $this->data =  $this->FetchSubjectsData('ئەخلاق');
    }
    public function render()
    {
        return view('livewire.admin.subject.ethics')->extends('components.layouts.app')->section('section');
    }
}
