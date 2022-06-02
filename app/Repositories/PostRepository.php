<?php
namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface {
    public function getAll($filter = [])
    {
        if (!$filter) {
            return Post::all();
        }

        return Post::orderBy($filter['column'], $filter['sort'])->get();
    }

    public function getById($id)
    {
        
    }

    public function updatePost(array $data, $id)
    {
        return Post::where('id', $id)->update($data);
    }

    public function deletePost($id)
    {
        
    }

    public function search($keyword = '')
    {
        if (! empty($keyword)) {
            return Post::where('title', 'LIKE', '%'.$keyword.'%')->get();
        }
    }
}