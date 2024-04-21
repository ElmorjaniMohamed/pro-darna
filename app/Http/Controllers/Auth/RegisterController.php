<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Services\AuthInterface;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class RegisterController extends Controller
{
    protected $authService;

    public function index()
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    public function __construct(AuthInterface $authService)
    {
        $this->authService = $authService;
    }

    public function register(RegisterUserRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['password'] = \Hash::make($validatedData['password']);

        $user = $this->authService->register($validatedData);

        $role = Role::where('name', 'agent')->first();
        if ($role) {
            $user->roles()->attach($role);
        }

        $user->sendEmailVerificationNotification();

        \Auth::login($user);

        return redirect()->route('verification.notice')->withSuccess('Successful registration! Please verify your email.');
    }
    
    
    
}