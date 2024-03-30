<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;

class Documents extends Component
{
    public function render()
    {
        return view('livewire.admin.setting.documents')->extends('components.layouts.app')->section('section');
    }
}
