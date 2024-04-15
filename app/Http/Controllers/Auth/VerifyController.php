<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EmailVerificationRequest;

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
                return redirect()->route('home')->withSuccess('Your email was already verified.');
            }

            $user->sendEmailVerificationNotification();

            return back()->withSuccess('Verification link sent successfully!');
        } else {
            return redirect()->route('login')->withErrors(['You must be logged in to resend the verification link.']);
        }
    }

    public function verifyEmail(Request $request, $id, $hash)
    {
        $user = $request->user();

        if ($id == $user->getKey() && hash_equals(sha1($user->getEmailForVerification()), $hash)) {
            $user->markEmailAsVerified();
            return redirect('/auth/login')->withSuccess('Email verified successfully. You can now log in.');
        }

        return redirect('/auth/login')->withErrors(['Invalid verification link.']);
    }

}