<?php
/** @const string HOME_PATH */
require_once HOME_PATH . '/core/config/autoload.php';

use Core\Classes\Router;

$router = new Router();
require_once HOME_PATH . '/core/config/routes.php';
