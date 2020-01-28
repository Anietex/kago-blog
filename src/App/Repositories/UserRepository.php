<?php


namespace Kago\App\Repositories;


use Kago\Core\Database\Database;

class UserRepository extends Database
{



    public function getUserById($id){
        return $this->selectOne('users','id = ?', [$id],'*');
    }

    public function getUserByEmail($email){
        return $this->selectOne('users','WHERE email = ?', [$email],'*');

    }
}