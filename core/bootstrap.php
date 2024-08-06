<?php
session_start();

/** @const string HOME_PATH */
require_once HOME_PATH . '/core/config/autoload.php';

use Core\Classes\Router;
use Core\Classes\User;

$router = new Router();
require_once HOME_PATH . '/core/config/routes.php';

\Core\Classes\Request::Instance()->init();

$user = new User();
if (isset($_SESSION['current-user-id']))
{
    $user->loadById($_SESSION['current-user-id']);
}
define('USER', $user);
$router->start();