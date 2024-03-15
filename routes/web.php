<?php

use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::view('/admin', 'admin.index');
Route::get('/', [HomeController::class, 'index'])->middleware('verified')->name('home');
Route::get('/verify', [HomeController::class, 'verify'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/auth/login');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/resend/verification/email', [HomeController::class, 'resend'])->name('resend.email');

// Route::view('/auth/login', 'auth.login');
// Route::view('/auth/register', 'auth.register');
// Route::view('/auth/reset-password', 'auth.reset-password');
// Route::view('/auth/forgot-password', 'auth.forgot-password');
// Route::view('/admin/profile', 'admin.profile');
// Route::view('/admin/account-settings', 'admin.account-settings');// routes/web.php

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