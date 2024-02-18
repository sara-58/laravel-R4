<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});

Route::get('index', [MainController::class, 'index'])->name('index');
Route::get('team', [MainController::class, 'team'])->name('team');
Route::get('action', [MainController::class, 'action'])->name('action');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('class', [MainController::class, 'classes'])->name('class');
Route::get('appointment', [MainController::class, 'appointment'])->name('appointment');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::get('facilities', [MainController::class, 'facilities'])->name('facilities');
Route::get('error', [MainController::class, 'error'])->name('error');

Route::get('joinUs', [MainController::class, 'jointeam'])->name('joinUs');
Route::post('joinTeacher', [TeacherController::class, 'joinTeacher'])->name('joinTeacher');

Route::get('testimonial', [TestimonialController::class, 'create'])->name('testimonial');
Route::post('saveTestimonial', [TestimonialController::class, 'save'])->name('saveTestimonial');

Route::get('contact', [ContactController::class, 'create'])->name('contact');
Route::post('sendEmail', [ContactController::class, 'store'])->name('sendEmail');

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', function () { return view('auth.register'); })->name('register');

Route::group(['prefix' => 'admin', 'middleware' => ['verified']], function () {

    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('addUser', [UserController::class, 'create'])->name('addUser');
    Route::post('storeUser', [UserController::class, 'store'])->name('storeUser');
    Route::get('editUser/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::put('updateUser/{id}', [UserController::class, 'update'])->name('updateUser');
    Route::get('userDetails/{id}', [UserController::class, 'show'])->name('userDetails');
    Route::get('deleteUser/{id}', [UserController::class, 'destroy'])->name('deleteUser');
    Route::get('trashedUser', [UserController::class, 'trashed'])->name('trashedUser');
    Route::get('restoreUser/{id}', [UserController::class, 'restore'])->name('restoreUser');
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete');

    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('addTestimonial', [TestimonialController::class, 'add'])->name('addTestimonial');
    Route::post('storeTestimonial', [TestimonialController::class, 'store'])->name('storeTestimonial');
    Route::get('editTestimonial/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial');
    Route::put('updateTestimonial/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial');
    Route::get('testimonialDetails/{id}', [TestimonialController::class, 'show'])->name('testimonialDetails');
    Route::get('deleteTestimonial/{id}', [TestimonialController::class, 'destroy'])->name('deleteTestimonial');
    Route::get('trashedTestimonial', [TestimonialController::class, 'trashed'])->name('trashedTestimonial');
    Route::get('restoreTestimonial/{id}', [TestimonialController::class, 'restore'])->name('restoreTestimonial');
    Route::get('delete/{id}', [TestimonialController::class, 'delete'])->name('delete');

    Route::get('teachers', [TeacherController::class, 'index'])->name('teachers');
    Route::get('addTeacher', [TeacherController::class, 'create'])->name('addTeacher');
    Route::post('storeTeacher', [TeacherController::class, 'store'])->name('storeTeacher');
    Route::get('editTeacher/{id}', [TeacherController::class, 'edit'])->name('editTeacher');
    Route::put('updateTeacher/{id}', [TeacherController::class, 'update'])->name('updateTeacher');
    Route::get('teacherDetails/{id}', [TeacherController::class, 'show'])->name('teacherDetails');
    Route::get('deleteTeacher/{id}', [TeacherController::class, 'destroy'])->name('deleteTeacher');
    Route::get('trashedTeacher', [TeacherController::class, 'trashed'])->name('trashedTeacher');
    Route::get('restoreTeacher/{id}', [TeacherController::class, 'restore'])->name('restoreTeacher');
    Route::get('delete/{id}', [TeacherController::class, 'delete'])->name('delete');

    Route::get('students', [StudentController::class, 'index'])->name('students');
    Route::get('addStudent', [StudentController::class, 'create'])->name('addStudent');
    Route::post('storeStudent', [StudentController::class, 'store'])->name('storeStudent');
    Route::get('editStudent/{id}', [StudentController::class, 'edit'])->name('editStudent');
    Route::put('updatestudent/{id}', [StudentController::class, 'update'])->name('updateStudent');
    Route::get('studentDetails/{id}', [StudentController::class, 'show'])->name('studentDetails');
    Route::get('deleteStudent/{id}', [StudentController::class, 'destroy'])->name('deleteStudent');
    Route::get('trashedStudent', [StudentController::class, 'trashed'])->name('trashedStudent');
    Route::get('restoreStudent/{id}', [StudentController::class, 'restore'])->name('restoreStudent');
    Route::get('delete/{id}', [StudentController::class, 'delete'])->name('delete');

    Route::get('classes', [ClassController::class, 'index'])->name('classes');
    Route::get('addClass', [ClassController::class, 'create'])->name('addClass');
    Route::post('storeClass', [ClassController::class, 'store'])->name('storeClass');
    Route::get('editClass/{id}', [ClassController::class, 'edit'])->name('editClass');
    Route::put('updateClass/{id}', [ClassController::class, 'update'])->name('updateClass');
    Route::get('classDetails/{id}', [ClassController::class, 'show'])->name('classDetails');
    Route::get('deleteClass/{id}', [ClassController::class, 'destroy'])->name('deleteClass');
    Route::get('trashedClass', [ClassController::class, 'trashed'])->name('trashedClass');
    Route::get('restoreClass/{id}', [ClassController::class, 'restore'])->name('restoreClass');
    Route::get('delete/{id}', [ClassController::class, 'delete'])->name('delete');

    Route::get('adminMain', function () { return view('dashboard.adminMain');})->name('adminMain');

    Route::get('messages', [ContactController::class, 'index'])->name('messages');
    Route::get('showMessage/{id}', [ContactController::class, 'show'])->name('showMessage');
    Route::get('deleteMessage/{id}', [ContactController::class, 'destroy'])->name('deleteMessage');
    Route::get('trashedMessage', [ContactController::class, 'trashed'])->name('trashedMessage');
    Route::get('restoreMessage/{id}', [ContactController::class, 'restore'])->name('restoreMessage');
    Route::get('delete/{id}', [ContactController::class, 'delete'])->name('delete');

});


