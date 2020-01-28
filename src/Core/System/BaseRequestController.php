<?php

namespace Kago\Core\System;

abstract class BaseRequestController extends Config
{
    public  function loadView(string $view, array $data = []){
        extract($data);
        $viewsPath =  dirname(__DIR__,2).'/app/views';
        require $viewsPath.'/'.$view.'.php';
    }


    public function responseJson( $data,int $status_code = 200){
        header('Content-Type:text/json');
        print json_encode($data);
    }
}