<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\IUserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AuthService implements AuthInterface
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(array $userData)
    {
        $userData['password'] = Hash::make($userData['password']);
        $user = $this->userRepository->create($userData);
        return $user;
    }

    public function login(array $credentials)
    {
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            return $user;
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function logout()
    {
        Auth::logout();
    }
}