<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseAttachmentRequest;
use App\Http\Requests\Admin\CourseRequest;
use App\Models\Course;
use App\Models\TmpImage;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourse(CourseRequest $request)
    {
        try {
            $tmpImage = TmpImage::where('folder', '=', $request->image)->first();
            if ($tmpImage) {

                Course::create([
                    'name' => $request->name,
                    'duration' => $request->duration,
                    'description' => $request->description,
                    'image' => $tmpImage->folder . '/' . $tmpImage->filename
                ]);
                TmpImage::where('folder', '=', $request->image)->delete();
            }
            return redirect(route('admin.course.course'));
        } catch (\Exception $e) {
            return $e;
        }
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
