<?php

namespace App\Livewire\Admin\Subject;

use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;
use PhpParser\Node\Expr\Cast\Object_;

class Learning extends Component
{
    public $users = [];
    public $allUsers = [];
    public $filters = [];

    #[On('change-filter')]
    public function addUsers($subjectId,$subject, $subjectType, $author, $startDate, $endDate, $translator)
    {
        $filtered = array_filter($this->allUsers, function ($user) use ($subjectId,$subject, $subjectType, $author, $startDate, $endDate, $translator) {
            $start = Carbon::parse($startDate)->format('Y-m-d');
            $end   = Carbon::parse($endDate)->format('Y-m-d');
            $filteredBySubjectId = $subjectId  == '' || $user['id'] == $subjectId ;
            $filteredBySubject = $subject == '' || str_contains($user['subject'], $subject);
            $filteredBySubjectType = $subjectType == '' || str_contains($user['type'], $subjectType);
            $filteredByAuthor = $author == '' || str_contains($user['nusar'], $author);
            $filteredByStartDate = $startDate == null || $start >= $user['start_date'];
            $filteredByEndDate =   $endDate == null || $end <= $user['end_date'];
            $filteredByTranslator = $translator == '' || str_contains($user['warger'], $translator);
            return  $filteredBySubjectId &&  $filteredBySubject && $filteredBySubjectType && $filteredByAuthor && $filteredByTranslator && $filteredByStartDate && $filteredByEndDate;

        });
//        $filtered = $users->filter(function($user) use ($subject,$subjectType,$author,$startDate,$endDate,$translator) {
//            $filteredBySubject= $subject != '';
//            $filteredBySubjectType= $subjectType != '';
//            $filteredByAuthor= $author != '';
//            $filteredByStartDate= $startDate != '';
//            $filteredByEndDate= $endDate != '';
//            $filteredByTranslator= $translator != '';
//            dd($user);
//            if ($filteredBySubject){
//
//            }
//            if ($filteredBySubjectType){}
//            if ($filteredByAuthor){}
//            if ($filteredByStartDate){}
//            if ($filteredByEndDate){}
//            if ($filteredByTranslator){}
//            return true;
//        });
//        $this->filters =[];
//        if ($subject != ''){
//            $this->filters =[];
//            foreach ($this->users as $user) {
//                if ($subject == $user['subject']){
//                    array_push($this->filters,$user);
//                }
//            }
//        }
        $this->users = $filtered;
    }

    public function boot()
    {
        $this->allUsers = [
            ['id' => 1, 'subject' => 'babat1', 'nusar' => 'shkar',  'warger' => 'warger1', 'type' => 'aaa','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 2, 'subject' => 'babat2', 'nusar' => 'ara',    'warger' => 'warger2', 'type' => 'bbb','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 3, 'subject' => 'babat3', 'nusar' => 'kawan',  'warger' => 'warger1', 'type' => 'ccc','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 4, 'subject' => 'babat4', 'nusar' => 'ara',    'warger' => 'warger3', 'type' => 'ddd','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 5, 'subject' => 'babat1', 'nusar' => 'bilal',  'warger' => 'warger1', 'type' => 'eee','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 6, 'subject' => 'babat4', 'nusar' => 'shkar',  'warger' => 'warger2', 'type' => 'fff','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 7, 'subject' => 'babat2', 'nusar' => 'miran',  'warger' => 'warger2', 'type' => 'ggg','start_date'=>'2024-01-01','end_date'=>'2024-01-10'],
            ['id' => 8, 'subject' => 'babat3', 'nusar' => 'ara',    'warger' => 'warger4', 'type' => 'hhh','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
            ['id' => 9, 'subject' => 'babat5', 'nusar' => 'sirwan', 'warger' => 'warger2', 'type' => 'jjj','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
            ['id' => 10,'subject' => 'babat2', 'nusar' => 'kawan',  'warger' => 'warger1', 'type' => 'kkk','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
            ['id' => 11,'subject' => 'babat2', 'nusar' => 'sirwan', 'warger' => 'warger2', 'type' => 'lll','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
            ['id' => 12,'subject' => 'babat1', 'nusar' => 'hardy',  'warger' => 'warger4', 'type' => 'mmm','start_date'=>'2024-01-10','end_date'=>'2024-01-20'],
        ];

        $this->users = $this->allUsers;
    }

    public function render()
    {
        return view('livewire.admin.subject.learning')->extends('components.layouts.app')->section('section');
    }
}
