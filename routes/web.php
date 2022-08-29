<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Teacher\BatchController;
use App\Http\Controllers\Teacher\DashboardController;
use App\Http\Controllers\Teacher\LoginController;
use App\Http\Controllers\Teacher\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'teacher', 'as' => 'teacher.'], function () {
    Route::get('get-otp', [LoginController::class, 'getOtp'])->name('get-otp');
    Route::get('verify-otp', [LoginController::class, 'verifyOtp']);
    Route::post('otp', [LoginController::class, 'sendOtp'])->name('send-otp');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    
    Route::middleware(['auth', 'user.teacher'])->group(function() {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('batch', BatchController::class);
    });
});

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified', 'user.admin'])->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('school-class', SchoolClassController::class);
    Route::resource('board', BoardController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('teacher', TeacherController::class);
    Route::post('teacher/update-status/{teacher}', [TeacherController::class, 'updateStatus'])->name('update-status');
});