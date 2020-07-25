<?php

use CoffeeCode\Router\Router;

$router = new Router(BASE_URL);

$router->namespace('\App\Controllers');
$router->get('/', 'UsersController:index');

$router->dispatch();

if ($router->error()) {
  $router->redirect('/');
}
