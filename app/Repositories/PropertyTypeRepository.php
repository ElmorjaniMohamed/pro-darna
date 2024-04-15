<?php

namespace App\Repositories;

use App\Models\PropertyType;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\PropertyTypeRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class PropertyTypeRepository implements PropertyTypeRepositoryInterface
{
    public function all(): LengthAwarePaginator
    {
        return PropertyType::paginate();
    }
    public function create(array $attributes): Model
    {
        return PropertyType::create($attributes);
    }
    public function update(array $attributes, int $id): bool
    {
        return
            $this->find($id)->update($attributes);
    }

    public function delete(int $id): bool
    {
        return $this->find($id)->delete();
    }

    protected function find(int $id): Model
    {
        return PropertyType::find($id);
    }
}