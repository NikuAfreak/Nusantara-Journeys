<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreeDayController;
use App\Http\Controllers\CheckoutController;

// Home page route
Route::get('/', function () {
    return view('index');
});
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/package', [PackageController::class, 'index'])->name('packages');

Route::get('/threedaypackage', [ThreeDayController::class, 'index'])->name('threedaypackage');

// Auth routes - outside the closure!
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/index', function () {
    return view('index');
})->middleware('auth');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
