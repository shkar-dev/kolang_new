<?php

use App\Http\Controllers\Api\V1\MemberController;
use App\Http\Controllers\TestController;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Code\Test;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('api/v1/member', [TestController::class, 'create'])->name('members.create');
// Route::post('membersLogin', [TestController::class, 'store'])->name('members.login');
// Route::resource('member', MemberController::class)->names('member');
Route::post('member/login', [MemberController::class, 'login'])->name('member.login');
Route::post('member/register', [MemberController::class, 'register'])->name('member.register');
