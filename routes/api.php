<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/skills', [WelcomeController::class, 'skills']);
Route::get('/projects', [WelcomeController::class, 'projects']);
Route::post('/contact', [ContactController::class, 'contact']);
