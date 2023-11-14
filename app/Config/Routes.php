<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//students routes

$routes-> get('/users', 'UsersController::index');
$routes-> get('/users/create', 'UsersController::createUser');
