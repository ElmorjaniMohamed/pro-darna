<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verify()
    {
        return view('auth.verify');
    }

    public function resend(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->hasVerifiedEmail()) {
                return redirect()->route('home')->withSuccess('Your email was already verified');
            }

            $user->sendEmailVerificationNotification();

            return back()->withSuccess('Verification link sent successfully!');
        } else {
            return redirect()->route('login')->withErrors('You must be logged in to resend the verification link');
        }
    }
    
    public function verifyEmail(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/auth/login');
    }
}