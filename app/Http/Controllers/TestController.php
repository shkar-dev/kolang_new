<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
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
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',

        ]);

        $user = Member::create([
            'name' => $validated['name'],


        ]);

        return response()->json([
            'message' => 'User created successfully',
            'member' => $user,
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $member = Member::where('name', $request->name)->first();

            if ($member) {
                return response()->json([
                    'status' => true,
                    'message' => 'success',
                    'token' => $member->createToken("API TOKEN")->plainTextToken
                ], 200);
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => 'An error occurred while creating user.',
                'error' => $e->getMessage()
            ], 500);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
