<?php
session_start();

/** @const string HOME_PATH */
require_once HOME_PATH . '/core/config/autoload.php';

use Core\Classes\Router;
use Core\Classes\User;

$router = new Router();
require_once HOME_PATH . '/core/config/routes.php';

\Core\Classes\Request::Instance()->init();

$user = null;
if (isset($_SESSION['current-user-id']))
{
    $user = new User(intval($_SESSION['current-user-id']));
}

$router->start();