<?php

namespace App\Repositories;

use App\Models\Proprety;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;


class PropretyRepository implements PropretyRepositoryInterface
{
    public function all(): LengthAwarePaginator
    {
        return Proprety::paginate(6);
    }
    
    public function create(array $attributes): Model
    {
        return Proprety::create($attributes);
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
        return Proprety::find($id);
    }
}