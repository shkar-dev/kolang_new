<?php

namespace App\Livewire\Admin\Setting;

use App\Models\AcademicLevel;
use Livewire\Component;

class EducationLevel extends Component
{

    public $academicLevels;
    public $parent;
    public function mount()
    {
        $this->academicLevels = \App\Models\AcademicLevel::all();
        $this->parent = \App\Models\AcademicLevel::where('parent_id', '=', null)->get();
        foreach ($this->parent as $child) {
            $child->parent_id = AcademicLevel::where('parent_id', '=', $child->id)->get();

            foreach ($child->parent_id as $children) {
                // dd($children);
                $children->parent_id = AcademicLevel::where('parent_id', '=', $children->id)->get();

                foreach ($children->parent_id as $descendants) {
                    $descendants->parent_id = AcademicLevel::where('parent_id', '=', $descendants->id)->get();
                }
            }
        }
    }
    public function render()
    {

        return view('livewire.admin.setting.education-level')->extends('components.layouts.app')->section('section');
    }
}
