<?php

namespace App\Livewire\Admin\Subject;

use App\Traits\WithAdminModalFilter;
use Livewire\Attributes\On;
use Livewire\Component;

class Society extends Component
{
    use WithAdminModalFilter;
    public $users = [];

    #[On('change-filter')]
    public function filterUsers($subjectId,$subject, $subjectType, $author, $startDate, $endDate, $translator){
        $this->users =  $this->AdminModalFilter($subjectId,$subject, $subjectType, $author, $startDate, $endDate, $translator,$this->users);
    }
    public function boot()
    {
        $this->users = [
            ['id' => 1, 'subject' => 'babat1', 'nusar' => 'shkar',  'warger' => 'warger1', 'type' => 'کۆمەڵگە','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 2, 'subject' => 'babat2', 'nusar' => 'ara',    'warger' => 'warger2', 'type' => 'پەروەردە','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 3, 'subject' => 'babat3', 'nusar' => 'kawan',  'warger' => 'warger1', 'type' => 'فێربوون','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 4, 'subject' => 'babat4', 'nusar' => 'ara',    'warger' => 'warger3', 'type' => 'پەروەردە','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 5, 'subject' => 'babat1', 'nusar' => 'bilal',  'warger' => 'warger1', 'type' => 'فێربوون','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 6, 'subject' => 'babat4', 'nusar' => 'shkar',  'warger' => 'warger2', 'type' => 'کۆمەڵگە','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 7, 'subject' => 'babat2', 'nusar' => 'miran',  'warger' => 'warger2', 'type' => 'پەروەردە','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 8, 'subject' => 'babat3', 'nusar' => 'ara',    'warger' => 'warger4', 'type' => 'فێربوون','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
            ['id' => 9, 'subject' => 'babat5', 'nusar' => 'sirwan', 'warger' => 'warger2', 'type' => 'کۆمەڵگە','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
            ['id' => 10,'subject' => 'babat2', 'nusar' => 'kawan',  'warger' => 'warger1', 'type' => 'فێربوون','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
            ['id' => 11,'subject' => 'babat2', 'nusar' => 'sirwan', 'warger' => 'warger2', 'type' => 'فێربوون','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
            ['id' => 12,'subject' => 'babat1', 'nusar' => 'hardy',  'warger' => 'warger4', 'type' => 'کۆمەڵگە','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
        ];
    }
    public function render()
    {
        return view('livewire.admin.subject.society')->extends('components.layouts.app')->section('section');
    }
}
