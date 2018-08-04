<?php namespace App\Router;

use App\Controller\Controller;
use App\Exception;

class Router
{

    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    public function AddRoute(Controller $controller, string $path): void
    {
        $this->routes[$path] = $controller;
    }

    public function Enroute(string $path): Controller
    {
        if (!array_key_exists($path, $this->routes)) throw new Exception\NotFound();
        return $this->routes[$path];
    }

}
