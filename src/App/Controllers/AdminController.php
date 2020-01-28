<?php


namespace Kago\App\Controllers;


use Kago\Core\System\BaseRequestController;

class AdminController extends BaseRequestController
{


    public function showLogin(){
        $this->loadView('admin/pages/login');
    }
}