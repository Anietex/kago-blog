<?php


namespace Kago\Core;


use Kago\Core\Router\Route;
use Kago\Core\Router\Router;

class System
{



    public function boot(){
        $router = new Router();
        $routes = Route::getRoutes();

        $router->handleRequest($routes);

    }






}