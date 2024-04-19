<?php

namespace App\Repositories;

use App\Models\Agency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class AgencyRepository implements AgencyRepositoryInterface
{
    public function all()
    {
        return Agency::paginate(6);
    }

    public function create(array $attributes): Model
    {
        return Agency::create($attributes);
    }

    public function update(array $attributes, int $id): bool
    {
        $agency = $this->find($id);
        if ($agency) {
            return $agency->update($attributes);
        }
        return false;
    }

    public function delete(int $id)
    {
        $category = Agency::findOrFail($id);
        return $category->delete();
    }

    protected function find(int $id): ?Model
    {
        return Agency::find($id);
    }
}