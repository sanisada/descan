<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index',['filter' => 'redirectifauthenticated']);
$routes->get('/', 'Home::index');
$routes->get('/Home/filter', 'Home::filter');
$routes->get('/Home/show_data(:any)','Home::show_data/$1');
$routes->get('/Home/downloadExcel(:any)', 'Home::downloadExcel/$1');
$routes->post('/Home/downloadTableToExcel', 'Home::downloadTableToExcel');
$routes->post('/Home/downloadPendTableToExcel', 'Home::downloadPendTableToExcel');
$routes->post('/Home/downloadOlahragaTableToExcel', 'Home::downloadOlahragaTableToExcel');
// $routes->get('/dashboard', 'Dashboard::index');

// route pengaturan user
$routes->get('/pengaturan', 'User::index');
$routes->get('/metadata', 'Metadata::index');
$routes->get('/panduan', 'Panduan::index');
$routes->get('/user/create', 'User::create');
$routes->post('/user/save', 'User::save');
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->post('/user/update/(:num)', 'User::update/$1');
$routes->get('/user/delete/(:num)', 'User::delete/$1');

// route data podes
$routes->get('/data_prospera', 'Data::index');
$routes->post('/data/tambah_data', 'Data::tambah_data');

$routes->get('/data/create/(:segment)', 'Data::create/$1');
$routes->get('/data/getDesa', 'Data::getDesa');
$routes->post('/data/getDesa', 'Data::getDesa');
$routes->get('/data/deleteSls/(:num)/(:num)', 'Data::deleteSls/$1/$2');
$routes->get('/data/create2/(:segment)', 'Data::create2/$1');
$routes->get('/data/create3/(:segment)', 'Data::create3/$1');
$routes->get('/data/create4/(:segment)', 'Data::create4/$1');
$routes->get('/data/create5/(:segment)', 'Data::create5/$1');
$routes->get('/data/create6/(:segment)', 'Data::create6/$1');
$routes->get('/data/create7/(:segment)', 'Data::create7/$1');
$routes->get('/data/create8/(:segment)', 'Data::create8/$1');
$routes->get('/data/create9/(:segment)', 'Data::create9/$1');
$routes->get('/data/create10/(:segment)', 'Data::create10/$1');
$routes->post('/data/save1/(:segment)', 'Data::save1/$1');
$routes->post('/data/save2/(:segment)', 'Data::save2/$1');
$routes->post('/data/save3/(:segment)', 'Data::save3/$1');
$routes->post('/data/save4/(:segment)', 'Data::save4/$1');
$routes->post('/data/save5/(:segment)', 'Data::save5/$1');
$routes->post('/data/save6/(:segment)', 'Data::save6/$1');
$routes->post('/data/save7/(:segment)', 'Data::save7/$1');
$routes->post('/data/save8/(:segment)', 'Data::save8/$1');
$routes->post('/data/save9/(:segment)', 'Data::save9/$1');
$routes->post('/data/save10/(:segment)', 'Data::save10/$1');

$routes->get('/data/edit/(:segment)', 'Data::edit/$1');
$routes->get('/data/hapusSls/(:num)/(:num)', 'Data::hapusSls/$1/$2');
$routes->get('/data/edit2/(:segment)', 'Data::edit2/$1');
$routes->get('/data/edit3/(:segment)', 'Data::edit3/$1');
$routes->get('/data/edit4/(:segment)', 'Data::edit4/$1');
$routes->get('/data/edit5/(:segment)', 'Data::edit5/$1');
$routes->get('/data/edit6/(:segment)', 'Data::edit6/$1');
$routes->get('/data/edit7/(:segment)', 'Data::edit7/$1');
$routes->get('/data/edit8/(:segment)', 'Data::edit8/$1');
$routes->get('/data/edit9/(:segment)', 'Data::edit9/$1');
$routes->get('/data/edit10/(:segment)', 'Data::edit10/$1');
$routes->post('/data/simpan1/(:segment)', 'Data::simpan1/$1');
$routes->post('/data/simpan2/(:segment)', 'Data::simpan2/$1');
$routes->post('/data/simpan3/(:segment)', 'Data::simpan3/$1');
$routes->post('/data/simpan4/(:segment)', 'Data::simpan4/$1');
$routes->post('/data/simpan5/(:segment)', 'Data::simpan5/$1');
$routes->post('/data/simpan6/(:segment)', 'Data::simpan6/$1');
$routes->post('/data/simpan7/(:segment)', 'Data::simpan7/$1');
$routes->post('/data/simpan8/(:segment)', 'Data::simpan8/$1');
$routes->post('/data/simpan9/(:segment)', 'Data::simpan9/$1');
$routes->post('/data/simpan10/(:segment)', 'Data::simpan10/$1');

$routes->get('/data/detail/(:segment)', 'Data::detail/$1');
$routes->get('/data/detail2/(:segment)', 'Data::detail2/$1');
$routes->get('/data/detail3/(:segment)', 'Data::detail3/$1');
$routes->get('/data/detail4/(:segment)', 'Data::detail4/$1');
$routes->get('/data/detail5/(:segment)', 'Data::detail5/$1');
$routes->get('/data/detail6/(:segment)', 'Data::detail6/$1');
$routes->get('/data/detail7/(:segment)', 'Data::detail7/$1');
$routes->get('/data/detail8/(:segment)', 'Data::detail8/$1');
$routes->get('/data/detail9/(:segment)', 'Data::detail9/$1');
$routes->get('/data/detail10/(:segment)', 'Data::detail10/$1');
$routes->get('/data/delete/(:segment)', 'Data::delete/$1');
$routes->get('data/export/(:segment)', 'Data::exportToExcel/$1');


$routes->get('/login', 'Login::index',['filter' => 'redirectifauthenticated']);

$routes->group('login', ['filter' => 'redirectifauthenticated'], function ($routes) {
    $routes->get('/', 'Login::index');
});
$routes->post('/login/auth', 'Login::auth');
$routes->get('/login/logout', 'Login::logout');
// $routes->setAutoRoute(true);