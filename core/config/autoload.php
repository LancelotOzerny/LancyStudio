<?php
/** @const string HOME_PATH */

function RequireClass(string $name)
{
    $path = str_replace('\\', '/', $name);
    $path = HOME_PATH . '/' . mb_strtolower($name) . '.php';

    if (file_exists($path))
    {
        include $path;
    }
    else
    {
        echo "File '$path' is not founded!";
    }
}

spl_autoload_register('RequireClass');