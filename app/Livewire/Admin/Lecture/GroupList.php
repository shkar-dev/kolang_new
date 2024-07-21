<?php

namespace App\Livewire\Admin\Lecture;

use App\Traits\WithFetchGroupsData;
use Livewire\Component;

class GroupList extends Component
{
    use WithFetchGroupsData;
    public $data;
    public function boot()
    {
    }

    public function mount()
    {
        $this->data = $this->FetchGroupsData();
    }
    public function render()
    {
        return view('livewire.admin.lecture.group-list')->extends('components.layouts.app')->section('section');
    }
}
