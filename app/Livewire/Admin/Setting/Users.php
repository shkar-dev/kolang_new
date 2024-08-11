<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;

class Users extends Component
{

    public $user = null;
    public function render()
    {
        $this->user;
        return view('livewire.admin.setting.users', compact('user'));
    }
}
