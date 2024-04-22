<?php

use App\Livewire\Admin\Subject\Society;
use App\Livewire\Article;
use App\Livewire\Ethics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web rouextends('livewire your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\User\Home::class)->name('home');
Route::get('/education', \App\Livewire\User\Education::class)->name('education');
Route::get('/learning', \App\Livewire\User\Education::class)->name('learning');
Route::get('/community', \App\Livewire\User\Education::class)->name('community');
Route::get('/morality', \App\Livewire\User\Education::class)->name('morality');
Route::get('/courses', \App\Livewire\User\Education::class)->name('courses');
Route::get('/articles', \App\Livewire\User\Education::class)->name('articles');
Route::get('/videos', \App\Livewire\User\Education::class)->name('videos');



Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', \App\Livewire\Admin\Dashboard::class);
//    subject
    Route::get('/subject/education', \App\Livewire\Admin\Subject\Education::class)->name('admin.subject.education');
    Route::get('/subject/learning', \App\Livewire\Admin\Subject\Learning::class)->name('admin.subject.learning');
    Route::get('/subject/society', Society::class)->name('admin.subject.society');
    Route::get('/subject/ethics', Ethics::class)->name('admin.subject.ethics');
    Route::get('/subject/article', Article::class)->name('admin.subject.article');
    Route::get('/subject/add-subject', \App\Livewire\Admin\Subject\AddSubjectForm::class)->name('admin.subject.add-subject-form');
    Route::get('/back-button', function () {
        return redirect()->back();
    })->name('admin.back-button');

//    sraff
    Route::get('/staff/writer', \App\Livewire\Admin\Staff\Staff::class)->name('admin.staff.writer');
    Route::get('/staff/add-writer', \App\Livewire\Admin\Staff\AddStaff::class)->name('admin.staff.add-writer');

    Route::get('test2', function () {
        return "welcmoe0";
    })->name('admin.upload.froala');

    Route::post('/test33',[\App\Http\Controllers\FroalaUploadImageController::class,'store'])->name('admin.upload.store');
    Route::get('/documents', \App\Livewire\Admin\Setting\Documents::class)->name('admin.setting.document');
});
Route::post('/upload_image',function (Request $request){
    $image = $request->file('file');
    $imageName = time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('uploads/'), $imageName);
    return response()->json(['link' => '/uploads/'.$imageName]);
});
