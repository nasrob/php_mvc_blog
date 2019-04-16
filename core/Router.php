<?php 

namespace App\Core;

require 'app/controllers/UsersController.php';
require 'app/controllers/PagesController.php';
require 'App/Controllers/ArticlesController.php';

class Router
{
    
    public $routes = [
        'GET' => [],
        'POST' => []
    ];
    
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
    
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            // return $this->routes[$requestType][$uri];
            return $this->callAction(
                // using the spleat operator to convert array to strings
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception("No method {$action} in {$controller}");
        }

        return $controller->$action();
    }

}