<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubejctRequest;
use App\Livewire\Admin\Subject\AddSubjectForm;
use App\Models\Article;
use App\Models\Staff;
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
                'title' => $request->title,
                'writer_id' => $request->writer_id,
                'translator_id' => $request->translator_id,
                'subject_id' => $request->subject_id,
                'date' => $request->date,
                'description' => $request->description,
                'content' => $request->content
            ]);
            return redirect()->back()->with('success', 'subject added successfully');
        } catch (Exception $e) {
            redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function froala(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/'), $imageName);
        return response()->json(['link' => '/uploads/' . $imageName]);
    }

    public function editSubject($id)
    {
        try {
            $subjectType = Subject::all();
            $translator = Staff::where('type', '=', 'translator')->get();
            $writer = Staff::where('type', '=', 'writer')->get();
            $subject = Article::where('id', '=', $id)->first();
            return view('livewire.admin.subject.add-subject-form', compact(['subjectType', 'translator', 'writer', 'subject']));
        } catch (Exception $e) {
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function updateSubject(SubejctRequest $request)
    {
        try {
            Article::where('id', '=', $request->id)->update([
                'title' => $request->title,
                'writer_id' => $request->writer_id,
                'translator_id' => $request->translator_id,
                'subject_id' => $request->subject_id,
                'date' => $request->date,
                'description' => $request->description,
                'content' => $request->content
            ]);
            return redirect()->back()->with('success', 'subject updated successfully');
        } catch (Exception $e) {
            redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function deleteSubject(Request $request)
    {
        DB::beginTransaction();
        try {
            Article::destroy($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'Subject deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
}
