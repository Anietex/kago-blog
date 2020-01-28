<?php

namespace Core\System;

abstract class RequestController
{
    public  function responseView(string $view, array $data){
        extract($data);
        $viewsPath =  dirname(__DIR__,2).'/views';
        require $viewsPath.'/'.$view.'.php';
    }


    public function responseJson( $data,int $status_code = 200){
        header('Content-Type:text/json');
        print json_encode($data);
    }
}