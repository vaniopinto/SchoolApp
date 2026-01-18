<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;


Route::redirect('/', '/dashboard');
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::inertia('login', 'Auth/Login');

require __DIR__.'/settings.php';
