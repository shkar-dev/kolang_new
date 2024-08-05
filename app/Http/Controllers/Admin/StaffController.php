<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StaffRequest;
use App\Models\Staff;
use App\Models\TmpImage;
use App\Traits\WithFetchAcademicLevel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    use WithFetchAcademicLevel;
    public function addStaff(StaffRequest $request)
    {
        try {
            $tmpImage = TmpImage::where('folder', '=', $request->image)->first();
            if ($tmpImage) {
                Staff::create([
                    'name'  => $request->name,
                    'type'  => $request->type,
                    'date_of_birth'  => $request->date_of_birth,
                    'mobile_1'  => $request->mobile_1,
                    'mobile_2'  => $request->mobile_2,
                    'mobile_3'  => $request->mobile_3,
                    'academic_level_id'  => $request->academic_level_id,
                    'gender'  => $request->gender,
                    'description' => $request->description,
                    'image' => $tmpImage->folder . '/' . $tmpImage->filename,
                ]);
                TmpImage::where('folder', '=', $request->image)->delete();
            }
            return redirect()->back()->with('success', 'staff added successfully');
            // description daxl nakrawa
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function editStaff($id)
    {
        $academic_level = $this->FetchAcademicLevel();
        $staff  = Staff::where('id', '=', $id)->first();
        return view('livewire.admin.staff.add-staff', compact('academic_level', 'staff'));
    }
    public function updateStaff(Request $request)
    {
        try {
            // $tmpImage = TmpImage::where('folder', '=', $request->image)->first();
            // if ($tmpImage) {
            Staff::where('id', '=', $request->staff_id)->update([
                'name'  => $request->name,
                'type'  => $request->type,
                'date_of_birth'  => $request->date_of_birth,
                'mobile_1'  => $request->mobile_1,
                'mobile_2'  => $request->mobile_2,
                'mobile_3'  => $request->mobile_3,
                'academic_level_id'  => $request->academic_level_id,
                'gender'  => $request->gender,
                'description' => $request->description,
                'image' => "aa"
            ]);
            //     TmpImage::where('folder', '=', $request->image)->delete();
            // }
            return redirect()->back()->with('success', 'staff updated successfully');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteStaff(Request $request)
    {
        DB::beginTransaction();
        try {
            Staff::destroy($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'staff deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            if ($e->getCode() == 23000)
                return redirect()->back()->with('failed', "there was an error deleting the staff");
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function addStaffAttachments(StaffRequest $request)
    {
    }
    public function deleteStaffAttachments()
    {
    }
}
