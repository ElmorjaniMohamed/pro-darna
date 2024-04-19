<?php

namespace App\Repositories;

use App\Models\PropertyAmenity;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenityRepository implements PropertyAmenityRepositoryInterface
{
    public function all()
    {
        return PropertyAmenity::paginate(6);
    }
    public function create(array $attributes): Model
    {
        return PropertyAmenity::create($attributes);
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

    protected function find(int $id): ?Model
    {
        return PropertyAmenity::find($id);
    }
}