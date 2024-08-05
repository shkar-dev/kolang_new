<?php

namespace App\Livewire\Admin\Staff;

use App\Traits\WithFetchAcademicLevel;
use Livewire\Component;

class AddStaff extends Component
{
    use WithFetchAcademicLevel;
    public $academic_level;
    public $staff;
    public function mount()
    {
        $this->academic_level = $this->FetchAcademicLevel();
    }
    public function render()
    {

        return view('livewire.admin.staff.add-staff');
    }
}
