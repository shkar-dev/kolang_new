<?php

namespace App\Livewire\Admin\Staff;

use Livewire\Component;

class AddLecturer extends Component
{
    public function render()
    {
        return view('livewire.admin.staff.add-lecturer')->extends('components.layouts.app')->section('section');
    }
}
