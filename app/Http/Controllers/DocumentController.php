<?php

namespace App\Http\Controllers;

use App\Livewire\Admin\Setting\Documents;
use App\Models\Document;
use Illuminate\Http\Request;
use Livewire\Livewire;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          Livewire::component('admin.setting.documents', Documents::class);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:documents,name|max:255',
        ]);
        Document::create($data);
        return redirect()->route('admin.setting.document');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        Document::findOrFail($document->id)->delete();
        return redirect(route('admin.setting.document'));
    }
}
