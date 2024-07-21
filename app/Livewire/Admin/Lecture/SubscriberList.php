<?php

namespace App\Livewire\Admin\Lecture;

use App\Models\Member;
use Livewire\Component;

class SubscriberList extends Component
{
    public $data;
    public function boot()
    {
    }

    public function mount()
    {
        $this->data = Member::where('type', 'participant')->get();
    }
    public function render()
    {
        return view('livewire.admin.lecture.subscriber-list')->extends('components.layouts.app')->section('section');
    }
}
