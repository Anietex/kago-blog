<?php


namespace Kago\App\Utils;


use Kago\App\Repository\UserRepository;

class Auth
{


    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }


    public function getAuthUser(){
        if(!empty($_SESSION['email'])){
            return $this->userRepository->getUserByEmail($_SESSION['email']);
        }

        return false;

    }

    public function isAuthenticated(){
        return $this->getAuthUser() !=false;
    }

    public function loginUser(string $email, string $password){

        $user = $this->userRepository->getUserByEmail($email);

        if($user){
             if(password_verify($password,$user->password)){
                 $_SESSION['email'] = $email;
                 return true;
             }
        }

        return false;
    }

}