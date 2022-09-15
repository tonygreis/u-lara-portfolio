<?php

use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SkillController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/skills', SkillController::class);
    Route::resource('/projects', ProjectController::class);
});

require __DIR__ . '/auth.php';
