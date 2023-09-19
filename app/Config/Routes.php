<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->get('/logout', 'Login::logout');


$routes->post('/register', 'Register::doregister');
$routes->post('/login', 'Login::dologin');

$routes->get('/dashboard', 'DashboardController::index');