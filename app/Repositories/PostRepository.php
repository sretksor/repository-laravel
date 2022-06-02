<?php
namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PostRepository implements PostRepositoryInterface {
    //Thay doi phan thao tac voi DB

    public function getAll($filter = [])
    {
        if (!$filter) {
            return Post::all();
        }

        // return Post::orderBy($filter['column'], $filter['sort'])->get();
        return DB::table('posts')->orderBy($filter['column'], $filter['sort'])->get();
    }

    public function getById($id)
    {
        return Post::find($id);
    }

    public function createPost(array $data)
    {
        return Post::create($data);
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