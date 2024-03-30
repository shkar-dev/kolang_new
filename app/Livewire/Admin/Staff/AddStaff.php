<?php

namespace App\Livewire\Admin\Staff;

use Livewire\Component;

class AddStaff extends Component
{
    public function render()
    {
        return view('livewire.admin.staff.add-staff')->extends('components.layouts.app')->section('section');
    }
}
