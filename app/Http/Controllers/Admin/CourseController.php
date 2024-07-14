<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseAttachmentRequest;
use App\Http\Requests\Admin\CourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourse(CourseRequest $request)
    {
    }

    public function editCourse(CourseRequest $request)
    {
    }
    public function updateCourse(CourseRequest $request)
    {
    }
    public function deleteCourse(Request $request)
    {
    }


    public function uploadAttachment(CourseAttachmentRequest $request)
    {
    }
    public function deleteAttachment(CourseAttachmentRequest $request)
    {
    }
}
