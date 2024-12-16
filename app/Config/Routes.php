<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'BookController::index'); // Menampilkan daftar buku
$routes->get('books/create', 'BookController::create'); // Form tambah buku
$routes->post('books', 'BookController::store'); // Menyimpan buku baru
$routes->get('books/edit/(:num)', 'BookController::edit/$1'); // Form edit buku
$routes->post('books/update/(:num)', 'BookController::update/$1'); // Update buku
$routes->get('books/delete/(:num)', 'BookController::delete/$1'); // Hapus buku