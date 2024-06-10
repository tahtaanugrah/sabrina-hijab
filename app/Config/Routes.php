<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Page::home');

//jenis

$routes->get('/isi_jenis', 'JenisController::create');

$routes->post('/jenis_store', 'JenisController::store');

$routes->get('edit_jenis/(:num)', 'JenisController::edit/$1');

$routes->post('update_jenis/(:num)', 'JenisController::update/$1');

$routes->post('jenis_updates/(:num)', 'JenisController::update/$1');

$routes->get('delete_jenis/(:num)', 'JenisController::delete/$1');




//deskripsi
$routes->get('deskripsi', 'DeskripsiController::index');

$routes->get('isi_deskripsi', 'DeskripsiController::create');

$routes->post('/deskripsi_store', 'DeskripsiController::store');

$routes->get('deskripsi/edit/(:num)', 'DeskripsiController::edit/$1');

$routes->post('deskripsi/update/(:num)', 'DeskripsiController::update/$1');

$routes->get('delete_deskripsi/(:num)', 'DeskripsiController::delete/$1');

$routes->get('edit_deskripsi/(:num)', 'DeskripsiController::edit/$1');

$routes->post('update_deskripsi/(:num)', 'DeskripsiController::update/$1');




//home

$routes->get('/home', 'Page::home');

//about

$routes->get('/about', 'AboutController::index');

$routes->get('/isi_about', 'AboutController::create');

$routes->post('/about_store', 'AboutController::store');

$routes->get('edit_about/(:num)', 'AboutController::edit/$1');

$routes->post('update_about/(:num)', 'AboutController::update/$1');

$routes->get('delete_about/(:num)', 'AboutController::delete/$1');


//katalog

$routes->get('/isi_katalog', 'KatalogController::create');

$routes->post('/katalog_store', 'KatalogController::store');

$routes->get('edit_katalog/(:num)', 'KatalogController::edit/$1');

$routes->post('update_katalog/(:num)', 'KatalogController::update/$1');

$routes->get('delete_katalog/(:num)', 'KatalogController::delete/$1');


//blog

$routes->get('/blog', 'BlogController::index');

$routes->get('/isi_blog', 'BlogController::create');

$routes->post('/blog_store', 'BlogController::store');

$routes->get('edit_blog/(:num)', 'BlogController::edit/$1');

$routes->post('update_blog/(:num)', 'BlogController::update/$1');

$routes->get('delete_blog/(:num)', 'BlogController::delete/$1');

//login
$routes->get('/login', 'Login::login');
$routes->post('/auth/cek_login', 'Login::cek_login');
$routes->get('/logout', 'Login::logout');

//admin
$routes->get('/kelola_home', 'Admin::kelola_home');
$routes->get('/edit_home', 'Admin::edit_home');
$routes->post('/edit_home_save', 'Admin::edit_home_save');

$routes->get('/kelola_about_us', 'Admin::index');
$routes->get('/kelola_about_us/edit', 'Admin::edit_about');
$routes->post('/about_edit_save', 'Admin::about_edit_save');

$routes->get('/kelola_blog', 'Admin::kelola_blog');
$routes->get('/tambah_blog', 'Admin::tambah_blog');
$routes->post('/tambah_blog_save', 'Admin::blog_tambah_save');
$routes->get('update_blog/(:segment)', 'Admin::edit_blog/$1');
$routes->post('/edit_blog_save', 'Admin::edit_blog_save');
$routes->get('hapus_blog/(:segment)', 'Admin::delete_blog/$1');

$routes->get('/kelola_katalog', 'Admin::kelola_katalog');
$routes->get('/tambah_katalog', 'Admin::tambah_katalog');
$routes->post('/tambah_katalog_save', 'Admin::katalog_tambah_save');
$routes->get('update_katalog/(:segment)', 'Admin::edit_katalog/$1');
$routes->post('/edit_katalog_save', 'Admin::edit_katalog_save');
$routes->get('hapus_katalog/(:segment)', 'Admin::delete_katalog/$1');

$routes->get('/jenis_katalog', 'Admin::jenis_katalog');
$routes->get('/tambah_jenis', 'Admin::tambah_jenis');
$routes->post('/tambah_jenis_save', 'Admin::jenis_tambah_save');
$routes->get('update_jenis/(:segment)', 'Admin::edit_jenis/$1');
$routes->post('/edit_jenis_save', 'Admin::edit_jenis_save');
$routes->get('hapus_jenis/(:segment)', 'Admin::delete_jenis/$1');

$routes->get('/deskripsi_katalog', 'Admin::deskripsi_katalog');
$routes->get('/tambah_deskripsi', 'Admin::tambah_deskripsi');
$routes->post('/tambah_deskripsi_save', 'Admin::deskripsi_tambah_save');
$routes->get('update_deskripsi/(:segment)', 'Admin::edit_deskripsi/$1');
$routes->post('/edit_deskripsi_save', 'Admin::edit_deskripsi_save');
$routes->get('hapus_deskripsi/(:segment)', 'Admin::delete_deskripsi/$1');

//new route
$routes->get('/katalog', 'Katalog::index');
$routes->get('/jenis/(:segment)', 'Katalog::jenis_katalog/$1');
$routes->get('/deskripsi/(:segment)', 'Katalog::deskripsi/$1');
$routes->get('/deskripsi/(:segment)/(:segment)', 'Katalog::deskripsi_warna/$1/$2');


