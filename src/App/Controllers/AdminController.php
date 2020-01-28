<?php


namespace Kago\App\Controllers;


use Kago\App\Repository\UserRepository;
use Kago\Core\System\BaseRequestController;

class AdminController extends BaseRequestController
{

    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function showLogin(){
        $this->loadView('admin/pages/login');

        $this->getConfig('database');
    }
}