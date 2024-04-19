<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
interface PropertyAmenityRepositoryInterface
{
    public function all();
    public function create(array $attributes): Model;
    public function update(array $attributes, int $id): bool;
    public function delete(int $id): bool;
}