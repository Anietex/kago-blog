<?php


namespace Kago\App\Repositories;


use Kago\Core\Database\Database;

class PostRepository extends Database
{


    public function getPostByTitle($title){
        return $this->selectOne('posts', 'where title = ?', [$title], '*');
    }

    public function getPostById($id){
        return $this->selectOne('posts', 'where id = ?', [$id], '*');
    }

    public function createPost($data){

        return $this->create('posts', $data);
    }
}