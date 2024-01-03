<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

// Route::get('home', function () {
//     return view('home');
// });
Route::get('team', function () {
    return view('team');
})->name('team');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('classes', function () {
    return view('classes');
})->name('classes');

Route::get('appointment', function () {
    return view('appointment');
})->name('appointment');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('team', function () {
    return view('team');
})->name('team');

Route::get('facilities', function () {
    return view('facilities');
})->name('facilities');

Auth::routes(['verify'=>true]);

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin'],function(){
    Route::get('addTestimonial',[TestimonialController::class,'create'])->name('addTestimonial');
    Route::post('tetimonialStore',[TestimonialController::class,'store'])->name('testimonial');

    Route::get('testimonial',[TestimonialController::class,'index']);
});
