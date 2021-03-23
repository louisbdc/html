<?php


namespace Louis\core;


class Route
{
    public $url = "";
    public $method = "";
    public $callback = "";

    public function __construct($method, $url, $callback)
    {
        $this->method = $method;
        $this->url = $url;
        $this->callback = $callback;

    }
}
