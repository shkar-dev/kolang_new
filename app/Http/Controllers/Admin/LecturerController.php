<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LecturerRequest;
use App\Models\Member;
use App\Models\MemberDocument;
use App\Models\StaffDocument;
use App\Models\TmpImage;
use App\Models\User;
use App\Traits\WithFetchAcademicLevel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LecturerController extends Controller
{
    use WithFetchAcademicLevel;
    public function addLecturer(LecturerRequest $request)
    {
        try {
            $tmpImage = TmpImage::where('folder', '=', $request->image)->first();
            if ($tmpImage) {
                Member::create([
                    'name'  => $request->name,
                    'type'  => 'lecturer',
                    'date_of_birth'  => $request->date_of_birth,
                    'mobile_1'  => $request->mobile_1,
                    'mobile_2'  => $request->mobile_2,
                    'mobile_3'  => $request->mobile_3,
                    // 'academic_level_id'  => $request->academic_level_id,
                    'gender'  => $request->gender,
                    // 'description' => $request->description,
                    'image' => $tmpImage->folder . '/' . $tmpImage->filename,

                ]);
                User::create([
                    'username' => $request->username,
                    'password' => Hash::Make($request->password),
                    'email' => $request->username . '@.com'
                ]);
                TmpImage::where('folder', '=', $request->image)->delete();

                return redirect()->back()->with('success', 'Lecturer added successfully');
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function editLecturer($id)
    {
        $academic_level = $this->FetchAcademicLevel();
        $lecturer  = Member::where('id', '=', $id)->where('type', '=', 'lecturer')->first();
        return view('livewire.admin.staff.add-lecturer', compact('academic_level', 'lecturer'));
    }
    public function deleteLecturer(Request $request)
    {
    }
    public function updatelecturer(Request $request)
    {
        try {
            //     $tmpImage = TmpImage::where('folder', '=', $request->image)->first();
            //     if ($tmpImage) {
            Member::where('id', '=', $request->id)->update([
                'name'  => $request->name,
                'type'  => 'lecturer',
                'date_of_birth'  => $request->date_of_birth,
                'mobile_1'  => $request->mobile_1,
                'mobile_2'  => $request->mobile_2,
                'mobile_3'  => $request->mobile_3,
                // 'academic_level_id'  => $request->academic_level_id,
                'gender'  => $request->gender,
                // 'description' => $request->description,
                // 'image' => "aa"

            ]);
            // User::create([
            //     'username' => $request->username,
            //     'password' => Hash::Make($request->password),
            //     'email' => $request->username . '@.com'
            // ]);
            // TmpImage::where('folder', '=', $request->image)->delete();

            return redirect()->back()->with('success', 'Lecturer updated successfully');
            // }
        } catch (Exception $e) {
            // return response()->json(['error' => $e->getMessage()], 500);
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function addAttachment(Request $request)
    {

        $data = json_decode($request->document);
        if ($request->type == 'lecturer' || $request->type == 'paticipant') {

            MemberDocument::create([
                'member_id' => $request->id,
                'document_type_id' => $request->document_type_id,
                'path' => $data->folder . '/' . $data->filename,
            ]);
        }
        if ($request->type == 'translator' || $request->type == 'writer') {

            StaffDocument::create([
                'staff_id' => $request->id,
                'document_type_id' => $request->document_type_id,
                'path' => $data->folder . '/' . $data->filename,
            ]);
        }
        return redirect()->back()->with('success', 'Attachment added successfully');
    }
    public function removelecturerAttachment()
    {
    }
}
