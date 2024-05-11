<?php

namespace App\Livewire\Admin\Staff;

use Livewire\Component;

class FilterModal extends Component
{

    public  $filter ;
    public  $staffId;
    public  $name ;
    public  $dateOfBirth ;
    public  $gender ;
    public  $educationLevel;
    public  $staffType;
    public  $phone1;
    public  $phone2;
    public  $phone3;


    public function clear(){
        $this->staffId="";
        $this->name="";
        $this->dateOfBirth="";
        $this->gender="";
        $this->educationLevel="";
        $this->phone1="";
        $this->phone2="";
        $this->phone3="";
        $this->changeFilter();
    }
    public function changeFilter(){
        $this->dispatch('change-staff-filter',$this->staffId,$this->name,$this->dateOfBirth,$this->gender,$this->educationLevel,$this->staffType,$this->phone1,$this->phone2,$this->phone3);
    }

    public function render()
    {
        return view('livewire.admin.staff.filter-modal');
    }
}
