<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupRequest;
use App\Models\Course;
use App\Models\Group;
use App\Models\Member;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    public function addGroup(GroupRequest $request)
    {
        try {
            Group::create([
                'name' => $request->name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'supervisor_id' => $request->supervisor_id,
                'lecturer_id' => $request->lecturer_id,
                'price' => $request->price,
                'course_id' => $request->course_id,
            ]);
            return redirect()->back()->with('success', 'Grpup added successfully');

            // description daxl nakrawa
        } catch (Exception $e) {
            return   redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function editGroup($id)
    {
        try {
            $subscribers = Member::where('type', '=', 'paticipant')->get();
            $groupSubscribers = Group::with('members')->where('id', '=', $id)->first();
            $lecturers = Member::where('type', '=', 'lecturer')->get();
            $courses = Course::all();
            $supervisors = $lecturers;
            $group = Group::where('id', '=', $id)->first();
            return  view('livewire.admin.lecture.group', compact(['lecturers', 'supervisors', 'courses', 'group', 'subscribers', 'groupSubscribers']));
        } catch (Exception $e) {
            return   redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function deleteGroup(Request $request)
    {
        DB::beginTransaction();
        try {
            Group::destroy($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'Group deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            if ($e->getCode() == 23000)
                return redirect()->back()->with('failed', "there was an error deleting the group");
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function updateGroup(GroupRequest $request)
    {
        try {
            Group::where('id', '=', $request->id)->update([
                'name' => $request->name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'supervisor_id' => $request->supervisor_id,
                'lecturer_id' => $request->lecturer_id,
                'price' => $request->price,
                'course_id' => $request->course_id,
            ]);
            return redirect()->back()->with('success', 'Group updated successfully');
            // description daxl nakrawa
        } catch (Exception $e) {
            redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function addGroupSubscriber(Request $request)
    {
        try {
            $group = Group::where('id', '=', $request->group_id)->first();
            $group->members()->attach($request->ids, ['created_at' => now()]);
            return '1';
        } catch (Exception $e) {
            redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function removeGroupSubscriber(Request $request)
    {
        DB::beginTransaction();
        try {
            $group = Group::where('id', '=', $request->parent_id)->first();
            $group->members()->detach($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'Group deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            if ($e->getCode() == 23000)
                return redirect()->back()->with('failed', "there was an error deleting the group");
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function addGroupLecture() {}
    public function removeGroupLecture() {}
    public function sortGroupLectures() {}
}
