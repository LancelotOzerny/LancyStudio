<?php

namespace Core\Classes;

class Controller
{
    public function view(string $view, string $template = 'default', array $data = []) : void
    {
        $path = HOME_PATH . "/develop/views/$view.php";
        if (file_exists($path))
        {
            include $path;
        }
        else
        {
            echo "View '$view' is not founded!";
        }
    }
}