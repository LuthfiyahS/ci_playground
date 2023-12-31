<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(false);
$routes->get('/', 'Home::index');
$routes->get('/tamu', 'Tamu::index');
$routes->get('/add_data_tamu', 'Tamu::add_data_tamu');
$routes->post('/proses_add_data_tamu', 'Tamu::proses_add_data_tamu');
$routes->get('/edit_data_tamu/(:any)', 'Tamu::edit_data_tamu/$1');
$routes->post('/proses_edit_data_tamu', 'Tamu::proses_edit_data_tamu');
$routes->get('/delete_data_tamu/(:any)', 'Tamu::delete_data_tamu/$1');

$routes->get('/register', 'Register::index');
$routes->post('/register/save', 'Register::save');

$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/login/logout', 'Login::logout');


$routes->get('/berkas', 'Berkas::index');
$routes->get('/berkas/create', 'Berkas::create');
$routes->post('/berkas/save', 'Berkas::save');
$routes->get('/berkas/download/(:any)', 'Berkas::download/$1');

//ajax
$routes->get('post', 'Post::index');
$routes->post('post/add', 'Post::add');
$routes->get('post/fetch', 'Post::fetch');
$routes->get('post/edit/(:num)', 'Post::edit/$1');
$routes->post('post/delete/(:num)', 'Post::delete/$1');
$routes->get('post/detail/(:num)', 'Post::detail/$1');
$routes->post('post/update', 'Post::update');










