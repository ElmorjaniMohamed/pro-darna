<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyAmenityController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


Route::view('/admin', 'admin.index');
Route::get('/', [HomeController::class, 'index'])->middleware('verified')->name('home');
Route::get('/verify', [VerifyController::class, 'verify'])->name('verification.notice');

// Email verification routes
Route::get('/email/verify/{id}/{hash}', [VerifyController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/resend/verification/email', [VerifyController::class, 'resend'])->name('resend.email');

// Registration routes
Route::get('/auth/register', [RegisterController::class, 'index'])->name('register');
Route::post('/auth/register', [RegisterController::class, 'register']);

// Login routes
Route::get('/auth/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login']);

// Logout route
Route::post('logout', [LogoutController::class, 'logout'])->middleware(['auth'])->name('logout');

// Forgot password
Route::get('/forget-password', [ForgetPasswordController::class, 'index'])->name('forget.password.get');
Route::post('/forget-password', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

// Reset password
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'index'])->name('reset.password.get');
Route::post('/reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('propertyTypes', PropertyTypeController::class);
    Route::resource('propertyAmenities', PropertyAmenityController::class);
});

Route::prefix('agent')->group(function () {
    Route::resource('agencies', AgencyController::class);
    Route::resource('properties', PropertyController::class);
});