<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\MemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [1, 1, 2, 2, 3, 3, 4];
    }

    public function register(MemberRequest $request)
    {


        // $isvalid  = $request->validate([
        //     'name' => 'required|string|max:255',

        // ]);

        $isvalid = $request->validated();


        if ($isvalid) {

            return response()->json(['status' => 'works'], 201);
        }
        if (!$isvalid) {
            return response()->json(['status' => 'not valid'], 400);
        }
    }
    public function login(Request $request)
    {
        return 'login';
    }
    public function logout()
    {
    }
}
