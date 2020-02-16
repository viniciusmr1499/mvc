<?php 

use SON\Router;

$router = new Router(); 

$router['/'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'index'
];

$router['/home'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'index'
];

$router['/login'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'login'
];

return $router;