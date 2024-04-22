<?php

namespace App\Traits;

use Carbon\Carbon;

trait WithAdminModalFilter {
    public function AdminModalFilter($subjectId,$subject, $subjectType, $author, $startDate, $endDate, $translator,$users)
    {
        return    array_filter($this->users, function ($user) use ($subjectId,$subject, $subjectType, $author, $startDate, $endDate, $translator) {
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
     }
}
