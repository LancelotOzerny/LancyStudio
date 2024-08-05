<?php
namespace Core\Config;

use Core\Traits\Singleton;

class App
{
    use Singleton;
    private array $database = [
        'host' => 'localhost',
        'database' => '',
        'user' => 'root',
        'password' => '',
    ];
}