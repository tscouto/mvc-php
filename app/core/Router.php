<?php
require_once ('../app/controllers/HomeController.php');
require_once ('../app/controllers/NoticiasController.php');
require_once ('../app/controllers/NotFoundController.php');

class Router
{
    public function dispatch($url)
    {
        $url = trim($url, '/');
        $parts = $url ? explode('/', $url) : [];
        $controllerName = $parts[0] ?? 'Home';
        $controllerName = ucfirst($controllerName) . 'Controller';
        if(!class_exists($controllerName)){
            $controllerName = 'NotFoundController';
        }
        $controller = new $controllerName();
        $controller->index();
        // echo 'url: ' .var_dump($parts);
        // echo '<hr>';
        // echo 'controller: ' .var_dump($controllerName);
    }
}
