<?php

namespace App\Livewire\Admin\Staff;

use App\Models\Staff;
use Livewire\Attributes\On;
use Livewire\Component;

class Translator extends Component
{
    public $data;


    #[On('change-staff-filter')]
    public function addUsers($staffId, $name, $dateOfBirth, $gender, $educationLevel, $staffType, $phone1, $phone2, $phone3)
    {
        // $this->staff =  array_filter($this->staff, function ($user) use ($staffId, $name, $dateOfBirth, $gender, $educationLevel, $staffType, $phone1, $phone2, $phone3) {
        //     $filteredByStaffId = $staffId == '' || $user['id'] == $staffId;
        //     $filteredByName = $name == '' || str_contains($user['name'], $name);
        //     $filteredByGender = $gender == '' || str_contains($user['gender'], $gender);
        //     $filteredByEducationLevel = $educationLevel == '' || str_contains($user['education_level'], $educationLevel);
        //     $filteredByStaffType = $staffType == '' || str_contains($user['staff_type'], $staffType);
        //     $filteredByPhone1 = $phone1 == '' || str_contains($user['phone1'], $phone1);
        //     $filteredByPhone2 = $phone2 == '' || str_contains($user['phone2'], $phone2);
        //     $filteredByPhone3 = $phone3 == '' || str_contains($user['phone3'], $phone3);
        //     return $filteredByStaffId  && $filteredByName   && $filteredByGender  && $filteredByEducationLevel   && $filteredByStaffType && $filteredByPhone1 && $filteredByPhone2 && $filteredByPhone3;
        // });
    }
    public function boot()
    {

        $this->addUsers('', '', '', '', '', 'وەرگێڕ', '', '', '');
    }

    public function mount()
    {
        $this->data = Staff::join('academic_levels', 'staff.academic_level_id', '=', 'academic_levels.id')
            ->where('staff.type', 'translator')
            ->select('staff.*', 'academic_levels.name as academicLevel')
            ->get();
    }
    public function render()
    {

        return view('livewire.admin.staff.translator')->extends('components.layouts.app')->section('section');
    }
}
