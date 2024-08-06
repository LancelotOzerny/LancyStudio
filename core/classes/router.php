<?php
namespace Core\Classes;

class Router
{
    private $routesList = [];

    public function add(string $from, string $to, int $levelAccess = 0, string $toPage = '/')
    {
        [$controller, $action] = explode('::', $to);

        $this->routesList[] = [
            'from' => $from,
            'access_level' => $levelAccess,
            'redirect_page' => $toPage,
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
                $access = $this->isAccessAllowed($route['access_level']);
                if ($access === false)
                {
                    header('Location:' . $route['redirect_page']);
                }

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

    private function isAccessAllowed(int $accessLevel)
    {
        if ($accessLevel > 0)
        {
            if (USER->rightsLevel < $accessLevel)
            {
                return false;
            }
        }

        return true;
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