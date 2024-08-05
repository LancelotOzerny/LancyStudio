<?php
namespace Core\Config;

use Core\Traits\Singleton;

class App
{
    use Singleton;
    public array $database = [
        'host' => 'localhost',
        'database' => '',
        'user' => 'root',
        'password' => '',
    ];
}