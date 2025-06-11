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
Route::get('/package/book/{package}', [PackageController::class, 'book'])->name('package.book');

Route::get('/threedaypackage', [ThreeDayController::class, 'index'])->name('threedaypackage');
Route::get('/threedaypackage/book/{package}', [ThreeDayController::class, 'book'])->name('threedaypackage.book');

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
// Route::post('/checkout/process', [CheckoutController::class, 'success'])->name('checkout.process');
// Route::get('/booking/success', [CheckoutController::class, 'success'])->name('booking.success');

Route::get('/success', function () {
    // if (!session('booking_details')) {
    //     return redirect()->route('packages')->with('error', 'No booking found');
    // }
    return view('success');
})->name('success');

