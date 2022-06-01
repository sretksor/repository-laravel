<?php

namespace App\Repositories;

use App\Models\Cateory;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll() 
    {
        return Cateory::all();
    }

    public function getById($id) 
    {
        return Cateory::find($id);
    }
 
    public function createCategory(array $data) 
    {
        return Cateory::create($data);
    }

    public function updateCategory(array $data, $id)
    {
        return Cateory::where('id', $id)->update($data);
    }
}