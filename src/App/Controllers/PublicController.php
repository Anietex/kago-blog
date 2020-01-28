<?php
namespace Kago\App\Controllers;

use Kago\Core\System\BaseRequestController;

class PublicController  extends BaseRequestController
{


    public function home(){

        $this->loadView('index', [
            "title" => "Home - Kago Blog"
        ]);
    }
}