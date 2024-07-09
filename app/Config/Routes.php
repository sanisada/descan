<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index',['filter' => 'redirectifauthenticated']);
$routes->get('/', 'Home::index');
// $routes->get('/dashboard', 'Dashboard::index');

// route pengaturan user
$routes->get('/pengaturan', 'User::index');
$routes->get('/user/create', 'User::create');
$routes->post('/user/save', 'User::save');
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->post('/user/update/(:num)', 'User::update/$1');
$routes->get('/user/delete/(:num)', 'User::delete/$1');

// route data podes
$routes->get('/data_podes', 'Data::index');
$routes->post('/data/tambah_data', 'Data::tambah_data');

$routes->get('/data/create/(:num)', 'Data::create/$1');
$routes->get('/data/getDesa', 'Data::getDesa');
$routes->post('/data/getDesa', 'Data::getDesa');
$routes->get('/data/deleteSls/(:num)/(:num)', 'Data::deleteSls/$1/$2');
$routes->get('/data/create2/(:num)', 'Data::create2/$1');
$routes->get('/data/create3/(:num)', 'Data::create3/$1');
$routes->get('/data/create4/(:num)', 'Data::create4/$1');
$routes->get('/data/create5/(:num)', 'Data::create5/$1');
$routes->get('/data/create6/(:num)', 'Data::create6/$1');
$routes->get('/data/create7/(:num)', 'Data::create7/$1');
$routes->get('/data/create8/(:num)', 'Data::create8/$1');
$routes->get('/data/create9/(:num)', 'Data::create9/$1');
$routes->get('/data/create10/(:num)', 'Data::create10/$1');
$routes->post('/data/save1/(:num)', 'Data::save1/$1');
$routes->post('/data/save2/(:num)', 'Data::save2/$1');
$routes->post('/data/save3/(:num)', 'Data::save3/$1');
$routes->post('/data/save4/(:num)', 'Data::save4/$1');
$routes->post('/data/save5/(:num)', 'Data::save5/$1');
$routes->post('/data/save6/(:num)', 'Data::save6/$1');
$routes->post('/data/save7/(:num)', 'Data::save7/$1');
$routes->post('/data/save8/(:num)', 'Data::save8/$1');
$routes->post('/data/save9/(:num)', 'Data::save9/$1');
$routes->post('/data/save10/(:num)', 'Data::save10/$1');

$routes->get('/data/edit/(:num)', 'Data::edit/$1');
$routes->get('/data/hapusSls/(:num)/(:num)', 'Data::hapusSls/$1/$2');
$routes->get('/data/edit2/(:num)', 'Data::edit2/$1');
$routes->get('/data/edit3/(:num)', 'Data::edit3/$1');
$routes->get('/data/edit4/(:num)', 'Data::edit4/$1');
$routes->get('/data/edit5/(:num)', 'Data::edit5/$1');
$routes->get('/data/edit6/(:num)', 'Data::edit6/$1');
$routes->get('/data/edit7/(:num)', 'Data::edit7/$1');
$routes->get('/data/edit8/(:num)', 'Data::edit8/$1');
$routes->get('/data/edit9/(:num)', 'Data::edit9/$1');
$routes->get('/data/edit10/(:num)', 'Data::edit10/$1');
$routes->post('/data/simpan1/(:num)', 'Data::simpan1/$1');
$routes->post('/data/simpan2/(:num)', 'Data::simpan2/$1');
$routes->post('/data/simpan3/(:num)', 'Data::simpan3/$1');
$routes->post('/data/simpan4/(:num)', 'Data::simpan4/$1');
$routes->post('/data/simpan5/(:num)', 'Data::simpan5/$1');
$routes->post('/data/simpan6/(:num)', 'Data::simpan6/$1');
$routes->post('/data/simpan7/(:num)', 'Data::simpan7/$1');
$routes->post('/data/simpan8/(:num)', 'Data::simpan8/$1');
$routes->post('/data/simpan9/(:num)', 'Data::simpan9/$1');
$routes->post('/data/simpan10/(:num)', 'Data::simpan10/$1');

$routes->get('/data/detail/(:num)', 'Data::detail/$1');
$routes->get('/data/detail2/(:num)', 'Data::detail2/$1');
$routes->get('/data/detail3/(:num)', 'Data::detail3/$1');
$routes->get('/data/detail4/(:num)', 'Data::detail4/$1');
$routes->get('/data/detail5/(:num)', 'Data::detail5/$1');
$routes->get('/data/detail6/(:num)', 'Data::detail6/$1');
$routes->get('/data/detail7/(:num)', 'Data::detail7/$1');
$routes->get('/data/detail8/(:num)', 'Data::detail8/$1');
$routes->get('/data/detail9/(:num)', 'Data::detail9/$1');
$routes->get('/data/detail10/(:num)', 'Data::detail10/$1');
$routes->get('/data/delete/(:num)', 'Data::delete/$1');


$routes->get('/login', 'Login::index',['filter' => 'redirectifauthenticated']);

$routes->group('login', ['filter' => 'redirectifauthenticated'], function ($routes) {
    $routes->get('/', 'Login::index');
});
$routes->post('/login/auth', 'Login::auth');
$routes->get('/login/logout', 'Login::logout');
// $routes->setAutoRoute(true);