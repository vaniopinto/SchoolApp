<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;


Route::redirect('/', '/dashboard');
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard')->middleware(['auth', 'verified']);

Route::inertia('login', 'Auth/Login')->name('login')->middleware('guest');

require __DIR__.'/settings.php';
