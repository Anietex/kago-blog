<?php


namespace Kago\App\Controllers;


use Kago\Core\System\BaseRequestController;

class PostController extends BaseRequestController
{


    public function showCreatePost(){

        $this->loadView('admin/pages/create-post');
    }
}