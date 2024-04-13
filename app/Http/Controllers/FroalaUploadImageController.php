<?php

namespace App\Http\Controllers;

use App\Models\FroalaUploadImage;
use Illuminate\Http\Request;

class FroalaUploadImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $response = FroalaUploadImage::create([
            'description'=>$request->input('content'),
        ]);
        if ($response){
            return 1;
        }
        return 2;
    }

    /**
     * Display the specified resource.
     */
    public function show(FroalaUploadImage $froalaUploadImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FroalaUploadImage $froalaUploadImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FroalaUploadImage $froalaUploadImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FroalaUploadImage $froalaUploadImage)
    {
        //
    }
}
