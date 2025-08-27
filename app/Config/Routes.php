<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('login', 'Login::index');


//login
$routes->post('proses_login', 'Login::login');
$routes->get('logout', 'Login::logout');

//dashboard
$routes->get('dashboard', 'Home::index2');

$routes->get('registrasi', 'Login::index_register');
$routes->post('register/user', 'Login::insert_register');
