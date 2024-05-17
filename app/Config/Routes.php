<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['filter' => 'redirectifauthenticated']);
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('/pengaturan', 'User::index',['filter' => 'auth']);
$routes->get('/user/create', 'User::create',['filter' => 'auth']);
$routes->get('/data_podes', 'Data::index',['filter' => 'auth']);
// $routes->get('/login', 'Login::index',['filter' => 'redirectifauthenticated']);

$routes->group('login', ['filter' => 'redirectifauthenticated'], function ($routes) {
    $routes->get('/', 'Login::index');
});
$routes->setAutoRoute(true);