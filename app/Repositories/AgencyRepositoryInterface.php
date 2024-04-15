<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface AgencyRepositoryInterface
{
    public function all(): Collection;
    public function create(array $attributes): Model;
    public function update(array $attributes, int $id): bool;
    public function delete(int $id): bool;
}