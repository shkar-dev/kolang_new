<?php

namespace App\Livewire\User;

use Livewire\Component;

class MobileNavigation extends Component
{
    public function render()
    {
        return view('livewire.user.mobile-navigation')->extends('components.layouts.user');
    }
}
