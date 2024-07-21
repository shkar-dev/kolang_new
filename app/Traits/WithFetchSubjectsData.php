<?php

namespace App\Traits;

use App\Models\AcademicLevel;
use App\Models\Article;
use Carbon\Carbon;

trait WithFetchSubjectsData
{
    public function FetchSubjectsData($subjectType)
    {
        return Article::join('subjects', 'articles.subject_id', '=', 'subjects.id')
            ->join('staff', 'articles.writer_id', '=', 'staff.id')
            ->join('staff as staff1', 'articles.translator_id', '=', 'staff1.id')
            ->where('subjects.name', '=', $subjectType)
            ->select('articles.*', 'subjects.name as subjectName', 'staff.name as writer', 'staff1.name as translator', 'staff.*')
            ->get();
    }
}
