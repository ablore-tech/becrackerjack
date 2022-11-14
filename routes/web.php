<?php

use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CollegeSubjectController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Teacher\BatchController;
use App\Http\Controllers\Teacher\DashboardController;
use App\Http\Controllers\Teacher\LoginController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\ThankYouController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;

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

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return redirect()->route('teacher.get-otp');
});

Route::group(['prefix' => 'teacher', 'as' => 'teacher.'], function () {
    Route::get('get-otp', [LoginController::class, 'getOtp'])->name('get-otp');
    Route::get('verify-otp', [LoginController::class, 'verifyOtp']);
    Route::post('otp', [LoginController::class, 'sendOtp'])->name('send-otp');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    
    Route::middleware(['auth', 'user.teacher'])->group(function() {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('batch', BatchController::class);
        Route::get('profile/{user}', [TeacherController::class, 'getProfile'])->name('get-profile');
        Route::put('profile/{user}', [TeacherController::class, 'updateProfile'])->name('update-profile');
    });
});

Auth::routes();

Route::get('college', [CollegeController::class, 'register'])->name('college.view');
Route::get('school', [SchoolController::class, 'view'])->name('school.view');
Route::get('language', [LanguageController::class, 'register'])->name('language.view');
Route::resource('leads', LeadController::class)->only('store');

Route::middleware(['auth', 'user.admin'])->group(function() {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('school-class', SchoolClassController::class);
    Route::resource('board', BoardController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('teacher', TeacherController::class);
    Route::post('teacher/update-status/{teacher}', [TeacherController::class, 'updateStatus'])->name('update-status');
    Route::get('colleges', [CollegeController::class, 'index'])->name('colleges.index');
    Route::resource('leads', LeadController::class)->only('index');
    Route::resource('language', LanguageController::class)->only([
        'store', 'update', 'destroy'
    ]);
    Route::resource('college-subject', CollegeSubjectController::class);
    Route::get('advance', [AdvanceController::class, 'index'])->name('advance.index');
    Route::get('thank-you', [ThankYouController::class, 'index'])->name('thank-you');
    Route::get('batch-list', [BatchController::class, 'list'])->name('batch.list');
    Route::post('batch-approval', [BatchController::class, 'approve'])->name('batch.approval');
});