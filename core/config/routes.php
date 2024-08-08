<?php
/** @var \Core\Classes\Router $router */

/* -------------------- ADMIN ROUTES -------------------- */
$loginPage = '/admin/login/';

$router->add('/admin/settings/user/', 'Admin/User::list', 100, $loginPage);
$router->add('/admin/settings/rights/', 'Admin/Rights::list', 100, $loginPage);
$router->add('/admin/', 'Admin/Home::index', 100, $loginPage);

$router->add('/admin/content/projects', 'Admin/Content/Projects::list', 100, $loginPage);

$router->add($loginPage, 'Admin/Auth::login');
$router->add('/admin/auth/', 'Admin/Auth::auth');


/* -------------------- PUBLIC ROUTES -------------------- */
$router->add('/', 'Main::index');
$router->add('/blog/', 'Main::blog');
$router->add('/portfolio/', 'Main::portfolio');
$router->add('/certificates/', 'Main::certificates');