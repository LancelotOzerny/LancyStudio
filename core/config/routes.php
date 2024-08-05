<?php
/** @var \Core\Classes\Router $router */

$router->add('/admin/settings/user', 'Admin/User::list');
$router->add('/admin', 'Admin/Home::index');

$router->add('/', 'Main::index');
$router->add('/blog', 'Main::blog');
$router->add('/portfolio', 'Main::portfolio');
$router->add('/certificates', 'Main::certificates');