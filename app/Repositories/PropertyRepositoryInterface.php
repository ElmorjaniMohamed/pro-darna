<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface PropertyRepositoryInterface
{
    public function all(): LengthAwarePaginator;
    public function create(array $attributes): Model;
    public function update(array $attributes, int $id): bool;
    public function delete(int $id): bool;
}