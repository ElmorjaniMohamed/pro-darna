<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Services\AuthInterface;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $authService;

    public function index()
    {
        return view('auth.register');
    }

    public function __construct(AuthInterface $authService)
    {
        $this->authService = $authService;
    }

    public function register(RegisterUserRequest $request)
    {
        $validatedData = $request->validated();

        $user = $this->authService->register($validatedData);
        $user->sendEmailVerificationNotification();

        \Auth::login($user);

        return redirect()->route('home')->withSuccess('Successful registration!');

    }
    
}