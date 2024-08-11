<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EducationLevelController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TmpImageController;
use App\Http\Controllers\Admin\UsersController;
use App\Livewire\Admin\Setting\EducationLevel;
use App\Livewire\Admin\Setting\Users;
use App\Livewire\Admin\Subject\Society;
use App\Models\TmpImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('/userlogin', function () {
    return view('auth.user.login');
});


Route::middleware('auth')->prefix('admin')->group(function () {


    Route::get('/subject/general', \App\Livewire\Admin\Subject\SubjectGeneral::class)->name('admin.subject.subjectGeneral');
    Route::get('/subject/education', \App\Livewire\Admin\Subject\Education::class)->name('admin.subject.education');
    Route::get('/subject/learning', \App\Livewire\Admin\Subject\Learning::class)->name('admin.subject.learning');
    Route::get('/subject/society', Society::class)->name('admin.subject.society');
    Route::get('/subject/ethics', \App\Livewire\Admin\Subject\Ethics::class)->name('admin.subject.ethics');
    Route::get('/subject/article', \App\Livewire\Admin\Subject\Article::class)->name('admin.subject.article');
    Route::get('/subject/add-subject', \App\Livewire\Admin\Subject\AddSubjectForm::class)->name('admin.subject.add-subject-form');

    Route::post('/subject/add-subject', [SubjectController::class, 'addSubject'])->name('admin.subject.add-subject');
    Route::get('/subject/edit-subject/{id}', [SubjectController::class, 'editSubject'])->name('admin.subject.edit-subject');
    Route::post('/subject/edit-subject', [SubjectController::class, 'updateSubject'])->name('admin.subject.update-subject');
    Route::post('/subject/delete', [SubjectController::class, 'deleteSubject'])->name('admin.subject.delete-subject');


    Route::get('/back-button', function () {
        return redirect()->back();
    })->name('admin.back-button');

    //    lecture
    Route::get('/lecture/course', \App\Livewire\Admin\Lecture\Course::class)->name('admin.course.course');
    Route::post('/lecture/course', [CourseController::class, 'addCourse'])->name('admin.course.add-course');
    Route::post('/lecture/course-attachment', [CourseController::class, 'addAttachment'])->name('admin.course.add-course-attachment');


    Route::get('/lecture/edit-course/{id}', [CourseController::class, 'editCourse'])->name('admin.course.edit-course');
    Route::post('/lecture/edit-course/{id}', [CourseController::class, 'updateCourse'])->name('admin.course.update-course');
    Route::post('/lecture/deleteCourse', [CourseController::class, 'deleteCourse'])->name('admin.course.delete-course');
    Route::post('/lecture/deleteCourseAttachment', [CourseController::class, 'deleteCourseAttachment'])->name('admin.course.delete-course-attachment');
    Route::get('/lecture/course-list', \App\Livewire\Admin\Lecture\CourseList::class)->name('admin.course.course-list');


    Route::get('/lecture/group', \App\Livewire\Admin\Lecture\Group::class)->name('admin.course.group');
    Route::post('/lecture/group', [GroupController::class, 'addGroup'])->name('admin.course.add-group');
    Route::get('/lecture/edit-group/{id}', [GroupController::class, 'editGroup'])->name('admin.course.edit-group');
    Route::post('/lecture/edit-group/{id}', [GroupController::class, 'updateGroup'])->name('admin.course.update-group');
    Route::get('/lecture/group-list', \App\Livewire\Admin\Lecture\GroupList::class)->name('admin.course.group-list');
    Route::post('/lecture/group-list', [GroupController::class, 'deleteGroup'])->name('admin.course.delete-group');
    Route::post('/lecture/group-list', [GroupController::class, 'deleteGroup'])->name('admin.course.delete-group');
    Route::post('/lecture/group-remove-subscriber', [GroupController::class, 'removeGroupSubscriber'])->name('admin.course.delete-group-subscriber');


    Route::get('/lecture/subscribers', \App\Livewire\Admin\Lecture\Subscribers::class)->name('admin.course.subscribers');
    Route::post('/lecture/subscribers', [SubscriberController::class, 'addSubscriber'])->name('admin.course.add-subscriber');
    Route::get('/lecture/edit-subscriber/{id}', [SubscriberController::class, 'editSubscriber'])->name('admin.course.edit-subscriber');
    Route::post('/lecture/edit-subscriber/{id}', [SubscriberController::class, 'updateSubscriber'])->name('admin.course.update-subscriber');
    Route::get('/lecture/subscriber-list', \App\Livewire\Admin\Lecture\SubscriberList::class)->name('admin.course.subscriber-list');
    Route::post('/lecture/subscriber-list', [SubscriberController::class, 'deleteSubscriber'])->name('admin.course.delete-subscriber');



    //    sraff
    Route::get('/staff/writer', \App\Livewire\Admin\Staff\Staff::class)->name('admin.staff.writer');
    Route::post('/staff/staff', [StaffController::class, 'addStaff'])->name('admin.staff.add-staff');
    Route::get('/staff/edit-staff/{id}', [StaffController::class, 'editStaff'])->name('admin.staff.edit-staff');
    Route::post('/staff/edit-staff/{id}', [StaffController::class, 'updateStaff'])->name('admin.staff.update-staff');
    Route::post('/staff/writer', [StaffController::class, 'deleteStaff'])->name('admin.staff.delete-writer');

    Route::get('/staff/add-lecturer', \App\Livewire\Admin\Staff\AddLecturer::class)->name('admin.staff.add-lecturer');
    Route::get('/staff/translator', \App\Livewire\Admin\Staff\Translator::class)->name('admin.staff.translator');
    Route::get('/staff/lecturer', \App\Livewire\Admin\Staff\Lecturer::class)->name('admin.staff.lecturer');
    Route::post('/staff/add-lecturer', [LecturerController::class, 'addLecturer'])->name('admin.staff.addLecturer');
    Route::get('/staff/edit-lecturer/{id}', [LecturerController::class, 'editLecturer'])->name('admin.staff.editLecturer');
    Route::post('/staff/edit-lecturer/{id}', [LecturerController::class, 'updateLecturer'])->name('admin.staff.updateLecturer');
    Route::post('/staff/add-member-attachment', [LecturerController::class, 'addAttachment'])->name('admin.staff.add-member-attachment');

    Route::get('/staff/add-writer', \App\Livewire\Admin\Staff\AddStaff::class)->name('admin.staff.add-writer');


    //    setting
    Route::get('test2', function () {
        return "welcmoe0";
    })->name('admin.upload.froala');

    Route::get('/edu_level', EducationLevel::class)->name('admin.setting.education-level');
    Route::post('/edu_level', [EducationLevelController::class, 'addEducationLevel'])->name('admin.setting.add-education-level');
    Route::post('/edu_level/delete', [EducationLevelController::class, 'deleteEducationLevel'])->name('admin.setting.delete-education-level');

    Route::post('/test33', [\App\Http\Controllers\FroalaUploadImageController::class, 'store'])->name('admin.upload.store');
    Route::get('/documents', \App\Livewire\Admin\Setting\Documents::class)->name('admin.setting.document');
    Route::resource('/documents', \App\Http\Controllers\DocumentController::class)->except('index')->names('admin.setting.documents');
    Route::get('/users', [UsersController::class, 'index'])->name('admin.setting.users');
    Route::get('/users-list', [UsersController::class, 'usersList'])->name('admin.setting.users-list');
    Route::post('/users-list', [UsersController::class, 'deleteUser'])->name('admin.setting.delete-user');
    Route::get('/users-edit/{id}', [UsersController::class, 'editUser'])->name('admin.setting.edit-user');
    Route::post('/users-edit/{id}', [UsersController::class, 'updateUser'])->name('admin.setting.update-user');
    Route::post('/users', [UsersController::class, 'addUser'])->name('admin.setting.add-users');
})->middleware('auth');

Route::post('/lecture/group-subscribers', [GroupController::class, 'addGroupSubscriber'])->name('admin.course.add-group-subscriber');
// Route::post('/upload_image', function (Request $request) {
//     $image = $request->file('file');
//     $imageName = time() . '.' . $image->getClientOriginalExtension();
//     $image->move(public_path('uploads/'), $imageName);
//     return response()->json(['link' => '/uploads/' . $imageName]);
// });
Route::post('/upload_image', [SubjectController::class, 'froala'])->name('admin.subject.froala_upload');

Route::post('/imageUpload', TmpImageController::class);
Route::post('/test111', function (Request $request) {
    return 1;
});

Route::post('/test_sub ', function (Request $request) {
    return $request;
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
