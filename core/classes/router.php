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
                $filePath = HOME_PATH . '/develop/controllers/' . $route['controller'] . '.php';
               if (file_exists($filePath))
               {
                   include $filePath;

                   $action = $route['action'];
                   $classPath = 'Develop\\Controllers\\' . str_replace('/', '\\', $route['controller']);

                   if (class_exists($classPath))
                   {
                       $class = new $classPath();

                       if (method_exists($class, $action))
                       {
                           $class->$action();
                       }
                       else
                       {
                           echo "Method '$action' is not exists in class '$classPath'";
                       }
                   }
                   else
                   {
                       echo "Class '$classPath' is not founded!";
                   }
               }
               else
               {
                   echo "File '$filePath' is not exists!";
               }
            }
        }
    }

    public function getRoutes()
    {
        return $this->routesList;
    }
}