<?php

namespace App\Repositories;

use App\Models\Agency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;


class AgencyRepository implements AgencyRepositoryInterface
{
    public function all(): LengthAwarePaginator
    {
        return Agency::paginate(6);
    }

    public function create(array $attributes): Model
    {
        return Agency::create($attributes);
    }

    public function update(array $attributes, int $id): bool
    {
        return $this->find($id)->update($attributes);
    }

    public function delete(int $id): bool
    {
        return $this->find($id)->delete();
    }

    protected function find(int $id): Model
    {
        return Agency::find($id);
    }
}