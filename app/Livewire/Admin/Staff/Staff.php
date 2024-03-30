<?php

namespace App\Livewire\Admin\Staff;

use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class Staff extends Component
{
    public $staff=[];
    public $allStaff = [];
    public $filters = [];

    #[On('change-staff-filter')]
    public function addUsers($staffId,$name, $dateOfBirth, $gender, $educationLevel, $staffType, $phone1, $phone2,$phone3)
    {
        $filtered = array_filter($this->allStaff, function ($user) use ($staffId,$name, $dateOfBirth, $gender, $educationLevel, $staffType, $phone1, $phone2,$phone3) {
//            $start = Carbon::parse($startDate)->format('Y-m-d');
//            $end = Carbon::parse($endDate)->format('Y-m-d');
            $filteredByStaffId = $staffId == '' || $user['id']== $staffId;
            $filteredByName = $name == '' || str_contains($user['name'], $name);
            $filteredByGender = $gender == '' || str_contains($user['gender'], $gender);
            $filteredByEducationLevel = $educationLevel == '' || str_contains($user['education_level'], $educationLevel);
//            $filteredByStartDate =  $start >= $user['start_date'];
//            $filteredByEndDate =  $end <= $user['end_date'];
            $filteredByStaffType = $staffType == '' || str_contains($user['staff_type'], $staffType);
            $filteredByPhone1 = $phone1 == '' || str_contains($user['phone1'], $phone1);
            $filteredByPhone2 = $phone2 == '' || str_contains($user['phone2'], $phone2);
            $filteredByPhone3 = $phone3 == '' || str_contains($user['phone3'], $phone3);
            return $filteredByStaffId && $filteredByName && $filteredByGender && $filteredByEducationLevel && $filteredByStaffType && $filteredByPhone1 && $filteredByPhone2 && $filteredByPhone3;
        });
        $this->staff = $filtered;
    }
    public function boot()
    {
        $this->allStaff = [
            ['id' => 1, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار','staff_type'=>'type1','phone1'=>'07701112233','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 2, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار','staff_type'=>'typ2','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 3, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار','staff_type'=>'type1','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 4, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'مامۆستا','staff_type'=>'type3','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 5, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'مێ', 'education_level' => 'مامۆستا','staff_type'=>'type1','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 6, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'مێ', 'education_level' => 'مامۆستا','staff_type'=>'type4','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 7, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار','staff_type'=>'type1','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 8, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار','staff_type'=>'typ2','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 9, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'خوێندکار','staff_type'=>'type1','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 10, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'نێر', 'education_level' => 'مامۆستا','staff_type'=>'type3','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 11, 'name' => 'shkar shahab', 'dob' => '10/10/2000', 'gender' => 'مێ', 'education_level' => 'مامۆستا','staff_type'=>'type1','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
            ['id' => 12, 'name' => 'ara rebwar', 'dob' => '10/10/2000', 'gender' => 'مێ', 'education_level' => 'مامۆستا','staff_type'=>'type4','phone1'=>'07728221515','phone2'=>'07728221515','phone3'=>'07728221515',],
        ];
        $this->staff = $this->allStaff;
    }
    public function render()
    {
        return view('livewire.admin.staff.staff')->extends('components.layouts.app')->section('section');
    }
}
