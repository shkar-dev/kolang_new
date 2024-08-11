<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EducationLevelRequest;
use App\Livewire\Admin\Setting\EducationLevel;
use App\Models\AcademicLevel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationLevelController extends Controller
{
    public function addEducationLevel(EducationLevelRequest $request)
    {
        $validated  = $request->validated();
        try {
            if ($request->parent_id == null) {
                AcademicLevel::create([
                    'name' => $validated['name'],
                    'parent_id' => null
                ]);
            } else {
                AcademicLevel::create([
                    'name' => $validated['name'],
                    'parent_id' => $validated['parent_id'],
                ]);
            }

            return redirect()->back()->with('success', 'Education Level added successfully');
        } catch (Exception $e) {
            DB::rollBack();
            if ($e->getCode() == 23000)
                return redirect()->back()->with('failed', "there was an error deleting the education level");
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function editEducationLevel(EducationLevelRequest $request) {}
    public function deleteEducationLevel(Request $request)
    {
        DB::beginTransaction();
        try {
            AcademicLevel::destroy($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'education level deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            if ($e->getCode() == 23000)
                return redirect()->back()->with('failed', "there was an error deleting the education level");
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
}
