<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        return Category::all();
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update(array $data, Category $category)
    {
        return $category->update($data);
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        return $category->delete();
    }
}