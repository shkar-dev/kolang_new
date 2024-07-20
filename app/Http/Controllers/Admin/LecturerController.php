<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LecturerRequest;
use App\Models\Member;
use App\Models\TmpImage;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LecturerController extends Controller
{
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
                    'description' => $request->description,
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
    public function editLecturer(LecturerRequest $request)
    {
    }
    public function deleteLecturer(Request $request)
    {
    }
    public function updatelecturer(Request $request)
    {
    }
    public function addLecturerAttachment(LecturerRequest $request)
    {
    }
    public function removelecturerAttachment()
    {
    }
}
