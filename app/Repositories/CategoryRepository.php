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

    }
}