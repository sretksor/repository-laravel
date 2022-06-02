<?php
    namespace App\Repositories\Interfaces;

    use App\Models\Post;

    interface PostRepositoryInterface {
        //getAll
        public function getAll();

        //getById
        public function getById($id);

        //updateById
        public function updatePost(array $data, $id);

        //deleteById
        public function deletePost($id);

        //search
        public function search($keyword);
    }
