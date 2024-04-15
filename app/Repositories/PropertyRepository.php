<?php

namespace App\Repositories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\PropertyRepositoryInterface;


class PropertyRepository implements PropertyRepositoryInterface
{
    public function all(): LengthAwarePaginator
    {
        return Property::paginate(6);
    }
    
    public function create(array $attributes): Model
    {
        return Property::create($attributes);
    }
    public function update(array $attributes, int $id): bool
    {
        return $this-> find($id)->update($attributes);
    }

    public function delete(int $id): bool
    {
        $property = $this->find($id);
        
        if ($property) 
        {
            return $property->delete();
        }
        return false;
    }

    protected function find(int $id): ?Model
    {
        return Property::find($id);
    }
}