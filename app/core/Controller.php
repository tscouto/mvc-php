<?php
namespace App\core;


class Controller
{
    protected function view($view, $viewData = [])
    {
        extract($viewData);
        $viewFile = __DIR__ . '/../view/' . $view . '.php';
        if (!file_exists($viewFile)) {
            throw new \Exception("View file not found: " .$viewFile);
        
        }
        require_once $viewFile;
    }
}
