<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Show registration form
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Handle registration
Route::post('register', [AuthController::class, 'register']);


// Show login form
Route::get('login', function () {
    return view('auth.login');
})->name('login');

// Handle login request
Route::post('login', [AuthController::class, 'login']);