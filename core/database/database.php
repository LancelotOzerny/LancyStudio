<?php
namespace Core\Database;

use Core\Config\App;

class Database
{
    private static $connection;

    public static function getConnection()
    {
        if (self::$connection === null)
        {
            self::$connection = new \PDO(
                'mysql:host=' . App::Instance()->database['host'] . ';dbname=' . App::Instance()->database['database'],
                App::Instance()->database['user'],
                App::Instance()->database['password'],
            );
        }

        return self::$connection;
    }
}