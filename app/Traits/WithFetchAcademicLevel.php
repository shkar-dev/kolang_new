<?php

namespace App\Traits;

use App\Models\AcademicLevel;
use Carbon\Carbon;

trait WithFetchAcademicLevel
{
    public function FetchAcademicLevel()
    {

        $parent = \App\Models\AcademicLevel::where('parent_id', '=', null)->get();
        foreach ($parent as $child) {
            $child->parent_id = AcademicLevel::where('parent_id', '=', $child->id)->get();

            foreach ($child->parent_id as $children) {
                // dd($children);
                $children->parent_id = AcademicLevel::where('parent_id', '=', $children->id)->get();

                foreach ($children->parent_id as $descendants) {
                    $descendants->parent_id = AcademicLevel::where('parent_id', '=', $descendants->id)->get();
                }
            }
        }
        return $parent;
    }
}
