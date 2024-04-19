<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;


interface AgencyRepositoryInterface
{
    public function all();
    public function create(array $attributes): Model;
    public function update(array $attributes, int $id);
    public function delete(int $id);
}