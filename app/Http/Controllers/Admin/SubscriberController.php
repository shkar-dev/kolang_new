<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubscriberRequest;
use App\Models\Member;
use App\Models\User;
use App\Traits\WithFetchAcademicLevel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriberController extends Controller
{
    use WithFetchAcademicLevel;
    public function addSubscriber(SubscriberRequest $request)
    {
        try {
            $subscribers = Member::create([
                'name' =>  $request->name,
                'type' => 'paticipant',
                'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'mobile_1' => $request->mobile_1,
                'mobile_2' => $request->mobile_2,
                'mobile_3' => $request->mobile_3,

            ]);
            User::create([
                'username' => $request->username,
                'password' => $request->password,
                'email' => $request->username . '@gmail.com',
            ]);
            return redirect()->back()->with('success', 'Subscriber added successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function editSubscriber($id)
    {

        $academicLevels = $this->FetchAcademicLevel();

        $subscriber = Member::where('id', '=', $id)->where('type', '=', 'paticipant')->first();
        return view('livewire.admin.lecture.subscribers', compact('subscriber', 'academicLevels'));
    }
    public function updateSubscriber(Request $request)
    {
        try {
            $subscribers = Member::where('id', '=', $request->id)->update([
                'name' =>  $request->name,
                'type' => 'paticipant',
                'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'mobile_1' => $request->mobile_1,
                'mobile_2' => $request->mobile_2,
                'mobile_3' => $request->mobile_3,

            ]);
            // User::create([
            //     'username' => $request->username,
            //     'password' => $request->password,
            //     'email' => $request->username . '@gmail.com',
            // ]);
            return redirect()->back()->with('success', 'Subscriber updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function deleteSubscriber(Request $request)
    {
        DB::beginTransaction();
        try {
            Member::destroy($request->id);
            DB::commit();
            return redirect()->back()->with('success', 'subscriber deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            if ($e->getCode() == 23000)
                return redirect()->back()->with('failed', "there was an error deleting the subscriber");
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
    public function addSubscriberTransaction()
    {
    }
    public function removeSubscriberTransaction()
    {
    }
}
