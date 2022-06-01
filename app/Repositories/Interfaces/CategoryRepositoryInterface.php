<?php

namespace App\Repositories\Interfaces;

use App\Models\Cateory;

interface CategoryRepositoryInterface
{
    //All method can use

    public function getAll();

    public function getById($id);

    public function createCategory(array $data);

    public function updateCategory(array $data, $id);
}