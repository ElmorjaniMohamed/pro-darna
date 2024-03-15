<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPasswordRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forget-password');
    }

    public function submitForgetPasswordForm(ForgetPasswordRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $validatedData['email'],
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($validatedData) {
            $message->to($validatedData['email']);
            $message->subject('Reset Password');
        });

        return back()->withSuccess('We have e-mailed your password reset link!');
    }

}