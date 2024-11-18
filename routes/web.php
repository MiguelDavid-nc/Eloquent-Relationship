<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profiles', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/courses', [UserController::class, 'courses'])->name('users.courses');
Route::get('/courses/{id}/users', [CourseController::class, 'users'])->name('courses.users');