<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UsersRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $user = null;
        return view('livewire.admin.setting.users', compact('user'));
    }

    public function addUser(UsersRequest $request)
    {
        try {
            User::create([
                'username' => $request->username,
                'password' => $request->password,
                'email' => $request->email,
                'mobile' => $request->mobile,
            ]);
            return redirect()->back()->with('success', 'user added successfully');
        } catch (Exception $e) {
            redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function usersList()
    {
        try {
            $data = User::all();
            return view('livewire.admin.setting.users-list', compact('data'));
        } catch (Exception $e) {
            redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function deleteUser(Request $request)
    {
        DB::beginTransaction();
        try {
            User::destroy($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'User deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function editUser($id)
    {

        $user = User::where('id', '=', $id)->first();
        return view('livewire.admin.setting.users', compact('user'));
    }

    public function updateUser(Request $request)
    {
        $currentUser = User::where('id', '=', $request->id)->first();
        try {
            User::where('id', '=', $request->id)->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => ($request->password != null ? $request->password : $currentUser->password),
                'mobile' => $request->mobile,
            ]);
            return redirect()->back()->with('success', 'user updated successfully');
        } catch (Exception $e) {
            redirect()->back()->with('failed', $e->getMessage());
        }
    }
}
