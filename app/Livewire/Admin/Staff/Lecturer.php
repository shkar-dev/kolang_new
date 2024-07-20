<?php

namespace App\Livewire\Admin\Staff;

use App\Traits\WithFetchAcademicLevel;
use Livewire\Attributes\On;
use Livewire\Component;

class Lecturer extends Component
{

    public $staff = [];

    #[On('change-staff-filter')]
    public function addUsers($staffId, $name, $dateOfBirth, $gender, $educationLevel, $staffType, $phone1, $phone2, $phone3)
    {
        $this->staff =  array_filter($this->staff, function ($user) use ($staffId, $name, $dateOfBirth, $gender, $educationLevel, $staffType, $phone1, $phone2, $phone3) {
            $filteredByStaffId = $staffId == '' || $user['id'] == $staffId;
            $filteredByName = $name == '' || str_contains($user['name'], $name);
            $filteredByGender = $gender == '' || str_contains($user['gender'], $gender);
            $filteredByEducationLevel = $educationLevel == '' || str_contains($user['education_level'], $educationLevel);
            $filteredByStaffType = $staffType == '' || str_contains($user['staff_type'], $staffType);
            $filteredByPhone1 = $phone1 == '' || str_contains($user['phone1'], $phone1);
            $filteredByPhone2 = $phone2 == '' || str_contains($user['phone2'], $phone2);
            $filteredByPhone3 = $phone3 == '' || str_contains($user['phone3'], $phone3);
            return $filteredByStaffId  && $filteredByName   && $filteredByGender  && $filteredByEducationLevel   && $filteredByStaffType && $filteredByPhone1 && $filteredByPhone2 && $filteredByPhone3;
        });
    }
    public function boot()
    {
        $this->staff = [
            ['id' => 1, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار', 'staff_type' => 'وانەبێژ', 'phone1' => '07701112233', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 2, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار', 'staff_type' => 'وانەبێژ', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 3, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار', 'staff_type' => 'وانەبێژ', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 4, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'مامۆستا', 'staff_type' => 'وانەبێژ', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 5, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'مێ', 'education_level' => 'مامۆستا', 'staff_type' => 'وەرگێڕ', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 6, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'مێ', 'education_level' => 'مامۆستا', 'staff_type' => 'وەرگێڕ', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 7, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار', 'staff_type' => 'وەرگێڕ', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 8, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار', 'staff_type' => 'وەرگێڕ', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 9, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار', 'staff_type' => 'نووسەر', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 10, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'ستاف', 'staff_type' => 'نووسەر', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 11, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'مێ', 'education_level' => 'مامۆستا', 'staff_type' => 'نووسەر', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
            ['id' => 12, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'مێ', 'education_level' => 'مامۆستا', 'staff_type' => 'نووسەر', 'phone1' => '07728221515', 'phone2' => '07728221515', 'phone3' => '07728221515',],
        ];
        $this->addUsers('', '', '', '', '', 'وانەبێژ', '', '', '');
    }
    public function render()
    {
        return view('livewire.admin.staff.lecturer')->extends('components.layouts.app')->section('section');
    }
}
