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

    public function start()
    {
        $url = $_SERVER['REQUEST_URI'];

        foreach ($this->routesList as $route)
        {
            if ($route['from'] === $url)
            {
                $included = $this->includeFileIfExists($route['controller'], $route['action']);
                if ($included)
                {
                    return;
                }
            }
        }
        $included = $this->includeFileIfExists('Page404', 'index');
        if ($included === false)
        {
            echo 'Page 404';
        }
    }

    private function includeFileIfExists(string $controller, string $action)
    {
        $filePath = HOME_PATH . '/develop/controllers/' . $controller . '.php';
        if (file_exists($filePath))
        {
            include $filePath;
            $classPath = 'Develop\\Controllers\\' . str_replace('/', '\\', $controller);

            if (class_exists($classPath))
            {
                $class = new $classPath();

                if (method_exists($class, $action))
                {
                    $class->$action();
                    return true;
                }
            }
        }

        return false;
    }

    public function getRoutes()
    {
        return $this->routesList;
    }
}