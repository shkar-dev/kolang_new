<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;

class EducationLevel extends Component
{
    public function render()
    {
        return view('livewire.admin.setting.education-level')->extends('components.layouts.app')->section('section');
    }
}
