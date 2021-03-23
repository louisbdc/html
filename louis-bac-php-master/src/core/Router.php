<?php


namespace Louis\core;

class Router
{
    public $pageNotFound = null;

    public function __construct($pageNotFound)
    {
        $this->pageNotFound = $pageNotFound;
    }

    private $routes = array();

    public function addRoute($method, $url, $callback)
    {
        $this->routes[] = new Route($method, $url, $callback);
    }

    public function manage()
    {
        // get url path
        $url = $_SERVER['REQUEST_URI'];
        $url = explode("?", $url)[0];

        $method = $_SERVER['REQUEST_METHOD'];
        foreach ($this->routes as $route) {
            if ($route->method == $method && $route->url == $url)
                return call_user_func($route->callback);
        }
        http_response_code(404);
        if ($this->pageNotFound != null)
            call_user_func($this->pageNotFound);
        die();
    }

}