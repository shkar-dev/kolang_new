<?php

namespace App\Livewire\Admin\Subject;

use App\Traits\WithAdminModalFilter;
use App\Traits\WithFetchSubjectsData;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;

class Learning extends Component
{
    use WithAdminModalFilter, WithFetchSubjectsData;
    public $data = [];
    public $subject;

    #[On('change-filter')]
    public function filterUsers($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator)
    {
        $this->data =  $this->AdminModalFilter($subjectId, $subject, $subjectType, $author, $startDate, $endDate, $translator, $this->users);
    }
    public function boot()
    {

        // $this->filterUsers('','','فێربوون','','','','');
    }

    public function mount()
    {
        $this->data =  $this->FetchSubjectsData('فێربوون');
    }
    public function render()
    {
        return view('livewire.admin.subject.learning')->extends('components.layouts.app')->section('section');
    }
}
