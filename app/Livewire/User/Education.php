<?php

namespace App\Livewire\User;

use Livewire\Component;

class Education extends Component
{
    public function render()
    {
        return view('livewire.user.education')->extends('components.layouts.user');
    }
}
