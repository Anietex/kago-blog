<?php


namespace Kago\Core\Router;


class RequestRouter
{
    private $path;
    private $requestMethod;
    private $handlerClass;
    private $handlerMethod;


    public function __construct($requestMethod, $path, $handlerClass, $handlerMethod)
    {
        $this->path = $path;
        $this->handlerClass = $handlerClass;
        $this->handlerMethod = $handlerMethod;
        $this->requestMethod = $requestMethod;
    }


    public function handleRequest($arguments=[]){
        $handlerClassInstance = new $this->handlerClass();
        $method = $this->handlerMethod;
        $handlerClassInstance->$method(...$arguments);
    }

    public function getRequestMethod(){
        return $this->requestMethod;
    }

    public function getRequestPath(){
        return $this->path;
    }


}