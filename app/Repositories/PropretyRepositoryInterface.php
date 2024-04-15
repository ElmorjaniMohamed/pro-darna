<?php

namespace App\Repositories;

interface PropretyRepositoryInterface
{
    public function all(): Collection;
    public function create(array $attributes): Model;
    public function update(array $attributes, int $id): bool;
    public function delete(int $id): bool;
}