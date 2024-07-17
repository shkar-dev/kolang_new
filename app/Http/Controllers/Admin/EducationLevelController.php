<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EducationLevelRequest;
use App\Livewire\Admin\Setting\EducationLevel;
use App\Models\AcademicLevel;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    public function addEducationLevel(EducationLevelRequest $request)
    {

        $validated  = $request->validated();
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
    }
    public function editEducationLevel(EducationLevelRequest $request)
    {
    }
    public function deleteEducationLevel(Request $request)
    {
    }
}
