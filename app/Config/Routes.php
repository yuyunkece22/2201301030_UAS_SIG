<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

/// routes kantor desa
$routes->get('/', 'Kantordesa::index'); // Mengatur rute GET untuk URL 'kantordesa'
$routes->get('kantordesa/tambah', 'Kantordesa::tambah');
$routes->post('/kantordesa/simpan', 'Kantordesa::simpan');
$routes->get('kantordesa/edit/(:num)', 'Kantordesa::edit/$1'); // ada parameter pertama 
$routes->post('kantordesa/update/(:num)', 'Kantordesa::update/$1');
$routes->get('kantordesa/hapus/(:num)', 'Kantordesa::hapus/$1');
$routes->get('peta', 'Kantordesa::peta');