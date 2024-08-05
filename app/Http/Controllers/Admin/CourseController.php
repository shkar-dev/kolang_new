<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseAttachmentRequest;
use App\Http\Requests\Admin\CourseRequest;
use App\Models\Course;
use App\Models\CourseAttachment;
use App\Models\TmpImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            return redirect()->back()->with('success', 'course added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function editCourse($id)
    {
        $course = Course::where('id', $id)->first();
        $course_attachments  = CourseAttachment::join('courses', 'course_attachments.course_id', '=', 'courses.id')
            ->where('course_id', '=', $id)
            ->select('course_attachments.*', 'courses.name as courseName')
            ->get();


        //     Post::join('categories', 'posts.category_id', '=', 'categories.id')
        // ->select('posts.*', 'categories.name as category_name')
        // ->get();
        return  view('livewire.admin.lecture.course', compact('course', 'course_attachments'));
    }
    public function updateCourse(Request $request)
    {
        try {
            // $tmpImage = TmpImage::where('folder', '=', $request->image)->first();
            // if ($tmpImage) {

            Course::where('id', '=', $request->course_id)
                ->update([
                    'name' => $request->name,
                    'duration' => $request->duration,
                    'description' => $request->description,
                    // 'image' => $tmpImage->folder . '/' . $tmpImage->filename
                ]);
            // TmpImage::where('folder', '=', $request->image)->delete();
            // }
            return redirect()->back()->with('success', 'course updated  successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function deleteCourse(Request $request)
    {

        DB::beginTransaction();
        try {
            Course::destroy($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'Course deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            if ($e->getCode() == 23000)
                return redirect()->back()->with('failed', "there was an error deleting the course");
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }


    public function addAttachment(Request $request)
    {
        $data = json_decode($request->attachment);
        $course_attachment = CourseAttachment::create([
            'name' => $request->name,
            'path' => $data->folder . '/' . $data->filename,
            'course_id' => $request->course_id
        ]);

        return redirect()->back()->with('success', 'attachmeent added successfully');
    }
    public function deleteCourseAttachment(Request $request)
    {

        DB::beginTransaction();
        try {
            CourseAttachment::destroy($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'Course Attachment deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            if ($e->getCode() == 23000)
                return redirect()->back()->with('failed', "there was an error deleting the course");
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
}
