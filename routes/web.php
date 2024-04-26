<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyAmenityController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\MessageController;


Route::view('/admin', 'admin.index');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sort-properties', [HomeController::class, 'sort']);
Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::post('/properties/{property}/message', [MessageController::class, 'message'])->name('properties.message');
Route::get('/properties-details/{id}', [HomeController::class, 'propertiesDetails'])->name('properties-details');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
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

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('propertyTypes', PropertyTypeController::class);
    Route::resource('propertyAmenities', PropertyAmenityController::class);
});

Route::prefix('agent')->middleware(['auth'])->group(function () {
    Route::get('agencies', [AgencyController::class, 'index'])->name('agencies.index');
    Route::get('agencies/create', [AgencyController::class, 'create'])->name('agencies.create')->middleware('check.agency');
    Route::post('agencies', [AgencyController::class, 'store'])->name('agencies.store');
    Route::get('agencies/{agency}/edit', [AgencyController::class, 'edit'])->name('agencies.edit');
    Route::put('agencies/{agency}', [AgencyController::class, 'update'])->name('agencies.update');
    Route::delete('agencies/{agency}', [AgencyController::class, 'destroy'])->name('agencies.destroy');
    Route::resource('properties', PropertyController::class);
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('profile/account-settings', [ProfileController::class, 'accountSettings'])->name('profile.account-settings');
});



Route::delete('/property/{property}/media/{media}', [
    PropertyController::class,
    'removeImage'
])->name('property.media.remove');