<?php
session_start();

/** @const string HOME_PATH */
require_once HOME_PATH . '/core/config/autoload.php';

use Core\Classes\Router;
use Core\Classes\User;

$user = new User();
if (isset($_SESSION['current-user-id']))
{
    $user->loadById($_SESSION['current-user-id']);
}
define('USER', $user);
define('CURRENT_URL', $_SERVER['REQUEST_URI'][-1] === '/' ? $_SERVER['REQUEST_URI'] : $_SERVER['REQUEST_URI'] . '/');

$router = new Router();
require_once HOME_PATH . '/core/config/routes.php';

\Core\Classes\Request::Instance()->init();


$router->start();