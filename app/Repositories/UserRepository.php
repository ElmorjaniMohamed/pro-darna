<?php

// app/Repositories/EloquentUserRepository.php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements IUserRepository
{
    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(array $data, $id)
    {
        return User::find($id)->update($data);
    }
}