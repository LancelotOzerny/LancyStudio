<?php
namespace Core\Classes;

class Router
{
    private $routesList = [];

    public function add(string $from, string $to)
    {
        [$controller, $action] = explode('::', $to);

        $this->routesList[] = [
            'from' => $from,
            'controller' => $controller,
            'action' => $action,
        ];
    }

    public function getRoutes()
    {
        return $this->routesList;
    }
}