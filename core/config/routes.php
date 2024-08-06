<?php
/** @var \Core\Classes\Router $router */

$router->add('/admin/settings/user', 'Admin/User::list', 100);
$router->add('/admin/settings/rights', 'Admin/Rights::list', 100);

$router->add('/admin/login', 'Admin/Auth::login');
$router->add('/admin/auth', 'Admin/Auth::auth');

$router->add('/admin', 'Admin/Home::index', 100);

$router->add('/', 'Main::index');
$router->add('/blog', 'Main::blog');
$router->add('/portfolio', 'Main::portfolio');
$router->add('/certificates', 'Main::certificates');