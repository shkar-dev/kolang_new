<?php

use App\Livewire\Admin\Setting\EducationLevel;
use App\Livewire\Admin\Subject\Society;

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
Route::get('/userlogin',function (){
    return view('auth.user.login');
});


Route::middleware('auth')->prefix('admin')->group(function () {
//    Route::get('/home', \App\Livewire\Admin\Dashboard::class);
//    subject

    Route::get('/subject/general', \App\Livewire\Admin\Subject\SubjectGeneral::class)->name('admin.subject.subjectGeneral');
    Route::get('/subject/education', \App\Livewire\Admin\Subject\Education::class)->name('admin.subject.education');
    Route::get('/subject/learning', \App\Livewire\Admin\Subject\Learning::class)->name('admin.subject.learning');
    Route::get('/subject/society', Society::class)->name('admin.subject.society');
    Route::get('/subject/ethics', \App\Livewire\Admin\Subject\Ethics::class)->name('admin.subject.ethics');
    Route::get('/subject/article',\App\Livewire\Admin\Subject\Article::class)->name('admin.subject.article');
    Route::get('/subject/add-subject', \App\Livewire\Admin\Subject\AddSubjectForm::class)->name('admin.subject.add-subject-form');
    Route::get('/back-button', function () {
        return redirect()->back();
    })->name('admin.back-button');

//    lecture
    Route::get('/lecture/course',\App\Livewire\Admin\Lecture\Course::class)->name('admin.course.course');
    Route::get('/lecture/group',\App\Livewire\Admin\Lecture\Group::class)->name('admin.course.group');
    Route::get('/lecture/subscribers',\App\Livewire\Admin\Lecture\Subscribers::class)->name('admin.course.subscribers');
    Route::get('/lecture/course-list',\App\Livewire\Admin\Lecture\CourseList::class)->name('admin.course.course-list');
    Route::get('/lecture/group-list',\App\Livewire\Admin\Lecture\GroupList::class)->name('admin.course.group-list');
    Route::get('/lecture/subscriber-list',\App\Livewire\Admin\Lecture\SubscriberList::class)->name('admin.course.subscriber-list');

//    sraff
    Route::get('/staff/writer', \App\Livewire\Admin\Staff\Staff::class)->name('admin.staff.writer');
    Route::get('/staff/add-lecturer', \App\Livewire\Admin\Staff\AddLecturer::class)->name('admin.staff.add-lecturer');
    Route::get('/staff/translator', \App\Livewire\Admin\Staff\Translator::class)->name('admin.staff.translator');
    Route::get('/staff/lecturer', \App\Livewire\Admin\Staff\Lecturer::class)->name('admin.staff.lecturer');
    Route::get('/staff/add-writer', \App\Livewire\Admin\Staff\AddStaff::class)->name('admin.staff.add-writer');


//    setting
    Route::get('test2', function () {
        return "welcmoe0";
    })->name('admin.upload.froala');

    Route::get('/edu_level',EducationLevel::class)->name('admin.setting.education-level');
    Route::post('/test33',[\App\Http\Controllers\FroalaUploadImageController::class,'store'])->name('admin.upload.store');
    Route::get('/documents', \App\Livewire\Admin\Setting\Documents::class)->name('admin.setting.document');
    Route::resource('/documents', \App\Http\Controllers\DocumentController::class)->except('index')->names('admin.setting.documents');
})->middleware('auth');
Route::post('/upload_image',function (Request $request){
    $image = $request->file('file');
    $imageName = time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('uploads/'), $imageName);
    return response()->json(['link' => '/uploads/'.$imageName]);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

