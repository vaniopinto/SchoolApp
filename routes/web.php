<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\Staff\StudentController;
use App\Http\Controllers\CoursesController;


Route::redirect('/', '/dashboard');
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard')->middleware(['auth', 'verified']);

Route::inertia('login', 'Auth/Login')->name('login')->middleware('guest');

Route::resource('students', StudentController::class);

require __DIR__.'/settings.php';
