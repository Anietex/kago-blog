<?php


namespace Kago\Core;


use Kago\Core\Router\Route;
use Kago\Core\Router\Router;

class System
{



    public function boot(){
        ob_start();
        session_start();
        $router = new Router();
        $routes = Route::getRoutes();
        $router->handleRequest($routes);
        ob_flush();
    }






}