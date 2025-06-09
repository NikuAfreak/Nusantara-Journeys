<<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home page route
Route::get('/', function () {
    return view('index');
});

// Auth routes - outside the closure!
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);
