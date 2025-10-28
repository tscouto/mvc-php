<?php
namespace App\core;
use App\controllers\errors\HttpErrorController;


// 
class Router
{
    public function dispatch($url)
    {
        $url = trim($url, '/');
        $parts = $url ? explode('/', $url) : [];
        $controllerName = $parts[0] ?? 'Home';
        // dd($controllerName);

        $controllerName = 'App\Controllers\\' .ucfirst($controllerName) . 'Controller';
        if (!class_exists($controllerName)) {
            $controller = new HttpErrorController();
            $controller->NotFound();
            return;
        }

        $controller = new $controllerName();
        $actionName = $parts[1] ?? 'Index';

        if (!method_exists($controller, $actionName)) {

            $controller = new HttpErrorController();
            $controller->NotFound();
            return;
        }
        $params = array_slice($parts, 2);
        call_user_func_array([$controller, $actionName], $params);
    }
}
