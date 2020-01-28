<?php


namespace Kago\App\Controllers;


use Kago\App\Repositories\UserRepository;
use Kago\App\Utils\Auth;
use Kago\Core\System\BaseRequestController;

class AdminController extends BaseRequestController
{

    private $userRepository;

    private $auth;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->auth = new Auth();
    }

    public function showLogin(){

        if($this->auth->isAuthenticated()){
            $this->redirect('/admin/post/create');
        }

        $this->loadView('admin/pages/login');
    }

    public function login(){

        if($this->loginInputIsValid()){
             if($this->auth->loginUser($_REQUEST['email'], $_REQUEST['password'])){
                 $this->redirect('/admin/post/create');
             }else{
                 $this->redirect('/admin');
             }
        }else{
            $this->redirect('/admin');
        }





    }

    private function loginInputIsValid(){
        $errors = [];


        if(empty($_REQUEST['email'])){
           $errors['email'] = 'Email is required';
        }else{
            if(!filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "A valid email address is required";
            }
        }

        if(empty($_REQUEST['password'])){
            $errors['password'] = "Password is required";
        }


        if(count($errors) != 0){
            $_SESSION['errors'] = $errors;
            return false;
        }else{
            unset($_SESSION['errors']);
            return true;
        }

    }
}