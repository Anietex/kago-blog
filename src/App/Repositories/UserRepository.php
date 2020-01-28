<?php


namespace Kago\App\Repository;


use Kago\Core\Database\Database;

class UserRepository extends Database
{



    public function getUserById($id){
        return $this->selectOne('user','id = ?', $id,'*');
    }

    public function getUserByEmail($email){
        return $this->selectOne('user','email = ?', $email,'*');

    }
}