<?php

namespace App\Traits;

use App\Models\AcademicLevel;
use App\Models\Article;
use App\Models\Course;
use App\Models\Group;
use Carbon\Carbon;

trait WithFetchGroupsData
{
    public function FetchGroupsData()
    {
        return Group::join('courses', 'groups.course_id', '=', 'courses.id')
            ->join('members', 'groups.lecturer_id', '=', 'members.id')
            ->join('members as members1', 'groups.supervisor_id', '=', 'members1.id')
            ->select('groups.*', 'courses.name as courseName', 'members.name as memberName', 'members1.name as supervisorName')
            ->get();
    }
}
