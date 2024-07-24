<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubejctRequest;
use App\Models\Article;
use App\Models\Subject;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request)
    // {
    //     return $request;
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }

    public function addSubject(SubejctRequest $request)
    {
        try {
            Article::create([
                'content' => $request->content,
                'writer_id' => $request->writer_id,
                'translator_id' => $request->translator_id,
                'subject_id' => $request->subject_id,
                'date' => $request->date,
                'description' => $request->description
            ]);
            return redirect()->back()->with('success', 'subject added successfully');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editSubject($id)
    {
        //pass data to the edit form
    }
    public function updateSubject($id, SubejctRequest $request)
    {
        //update the subject in the database
    }

    public function deleteSubject(Request $request)
    {
        DB::beginTransaction();
        try {
            Article::destroy($request->id);
            DB::commit();
            return redirect()->route('admin.subject.education')->with('success', 'Subject deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
