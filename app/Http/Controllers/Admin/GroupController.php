<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupRequest;
use App\Models\Group;
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
            return $e->getMessage();
        }
    }
    public function editGroup(GroupRequest $request)
    {
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
    }
    public function addGroupSubscriber(GroupRequest $request)
    {
    }
    public function removeGroupSubscriber(GroupRequest $request)
    {
    }
    public function addGroupLecture()
    {
    }
    public function removeGroupLecture()
    {
    }
    public function sortGroupLectures()
    {
    }
}
