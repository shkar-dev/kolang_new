<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubscriberRequest;
use App\Models\Member;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function addSubscriber(SubscriberRequest $request)
    {
        try {
            $subscribers = Member::create([
                'name' =>  $request->name,
                'type' => 'participant',
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
        }
    }
    public function editSubscriber(SubscriberRequest $request)
    {
    }
    public function updateSubscriber(SubscriberRequest $request)
    {
    }
    public function deleteSubscriber(Request $request)
    {
    }
    public function addSubscriberTransaction()
    {
    }
    public function removeSubscriberTransaction()
    {
    }
}
