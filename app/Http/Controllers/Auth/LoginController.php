<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LoginUserRequest;
use App\Services\AuthInterface;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    protected $authService;

    public function __construct(AuthInterface $authService)
    {
        $this->authService = $authService;
    }
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginUserRequest $request)
    {
        $credentials = $request->validated();

        $validatedData['password'] = \Hash::make($credentials['password']);

        if ($this->authService->login($credentials)) {
            return redirect()->intended(route('home'))->withSuccess('Login successfully!');
        }

        $request->user()->sendFailedLoginNotification($credentials);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}