<?php

namespace App\Repositories;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, Category $category);

    public function delete(Category $category);
}