<?php


namespace Kago\Core\Router;


class Router
{

    public function handleRequest(array $routes)
    {

        $requestedPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestedPath = trim($requestedPath, '/\\');
        $requestMethod = $_SERVER['REQUEST_METHOD'];


        foreach ($routes as $route) {
            $routePath = $route->getRequestPath();
            $routeMethod = $route->getRequestMethod();
            $routePath = trim($routePath, '/\\');

            if (preg_match('/:.+/', $routePath,)) {
                $routeRegexText = preg_replace(
                    [
                        '/(\/:[a-zA-Z]+)/m',
                        '/\//'
                    ],
                    [
                        '/([A-Za-z0-9_]+)',
                        '\/'],
                    $routePath);
                $routeRegex = '/' . $routeRegexText . '/';
               if(preg_match($routeRegex, $requestedPath, $matches)){
                   $requestParams = (array_slice($matches, 1));
                   $route->handleRequest($requestParams);
                   return;
               }

            } else {

                if ($requestedPath === $routePath) {
                    if ($requestMethod === $routeMethod) {
                        $route->handleRequest();
                        return;
                    }
                }
            }
        }

        print '404';

    }
}