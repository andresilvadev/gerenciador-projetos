<?php 
 
namespace ALS\Framework;

class Router
{
    private $routes = [];

    public function add(string $pattern, $callback) 
    {
        # Pattern usando expressão regular \/ scape
        $pattern = '/^'. str_replace('/','\/', $pattern) .'$/';
        $this->routes[$pattern] = $callback;
    }

    public function run()
    {
        $url =  $_SERVER['PATH_INFO'] ?? '/';

        foreach ($this->routes as $route => $action) {
            if (preg_match($route, $url, $params)) {
               return $action($params);
            }
        }

        return 'Página não encontrada';
    }
}