<?php


namespace Kago\Core\Router;


class Route
{

    private static $routes = [];


    static function get(string $path, string $handler){
        $methodClass = explode('@',$handler);
        $route = new RequestRouter('GET', $path,$methodClass[0],$methodClass[1]);
        array_push(self::$routes, $route);
    }


    static function post(string $path, string $handler){
        $methodClass = explode('@',$handler);
        $route = new RequestRouter('POST', $path,$methodClass[0],$methodClass[1]);
        array_push(self::$routes, $route);
    }

    static function getRoutes(): array {
        return self::$routes;
    }
}