<?php
/** @const string HOME_PATH */

function RequireClass(string $name)
{
    $path = HOME_PATH . '/' . $name . '.php';
    $path = str_replace('\\', '/', $path);
    $path = mb_strtolower($path);

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