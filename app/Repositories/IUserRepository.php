<?php

namespace App\Repositories;

interface IUserRepository
{
    public function findByEmail($email);
    public function create(array $data);
    public function update(array $data, $id);
}