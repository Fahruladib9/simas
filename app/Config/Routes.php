<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// frontend
$routes->get('/', 'Frontend\Home::index');
$routes->get('/blank', 'Frontend\Home::maintenance');

// Backend
// Admin Dashboard
$routes->get('/admin', 'Home::index');
// Login
$routes->get('/login', 'Auth::index');
$routes->get('/logout', 'Auth::logout');
$routes->post('/proses_login', 'Auth::proses_login');
// Data User
$routes->get('/admin/data-user', 'C_User::index');
$routes->post('/admin/tambah-data-user', 'C_User::tambah');
$routes->get('/admin/edit-data-user/(:any)', 'C_User::edit/$1');
$routes->post('/admin/update-data-user/(:any)', 'C_User::update/$1');
$routes->post('/admin/delete-data-user/(:any)', 'C_User::delete/$1');
// Admin Kas Masjid
// Admin Pemasukan Masjid
$routes->get('/admin/pemasukan-masjid', 'Kas_Masjid\C_Pemasukan::index');
$routes->post('/admin/tambah-pemasukan-masjid', 'Kas_Masjid\C_Pemasukan::tambah');
$routes->get('/admin/edit-pemasukan-masjid/(:any)', 'Kas_Masjid\C_Pemasukan::edit/$1');
$routes->post('/admin/update-pemasukan-masjid/(:any)', 'Kas_Masjid\C_Pemasukan::update/$1');
$routes->post('/admin/delete-pemasukan-masjid/(:any)', 'Kas_Masjid\C_Pemasukan::delete/$1');
// Admin Pengeluaran Masjid
$routes->get('/admin/pengeluaran-masjid', 'Kas_Masjid\C_Pengeluaran::index');
$routes->post('/admin/tambah-pengeluaran-masjid', 'Kas_Masjid\C_Pengeluaran::tambah');
$routes->get('/admin/edit-pengeluaran-masjid/(:any)', 'Kas_Masjid\C_Pengeluaran::edit/$1');
$routes->post('/admin/update-pengeluaran-masjid/(:any)', 'Kas_Masjid\C_Pengeluaran::update/$1');
$routes->post('/admin/delete-pengeluaran-masjid/(:any)', 'Kas_Masjid\C_Pengeluaran::delete/$1');
// Admin rekap kas masjid
$routes->get('/admin/rekap-kas-masjid', 'Kas_Masjid\C_Rekap_Kas::index');
$routes->post('/admin/sortir', 'Kas_Masjid\C_Rekap_Kas::sortirData');
// Admin Kas Sosial
// Admin Pemasukan kas sosial
$routes->get('/admin/pemasukan-sosial', 'Kas_Sosial\C_Pemasukan::index');
$routes->post('admin/tambah-pemasukan-sosial', 'Kas_Sosial\C_Pemasukan::tambah');
$routes->get('admin/edit-pemasukan-sosial/(:any)', 'Kas_Sosial\C_Pemasukan::edit/$1');
$routes->post('/admin/update-pemasukan-sosial/(:any)', 'Kas_Sosial\C_Pemasukan::update/$1');
$routes->post('admin/delete-pemasukan-sosial/(:any)', 'Kas_Sosial\C_Pemasukan::delete/$1');
// Admin Pengeluaran Kas Sosial
$routes->get('admin/pengeluaran-sosial', 'Kas_Sosial\C_Pengeluaran::index');
$routes->post('/admin/tambah-pengeluaran-sosial', 'Kas_Sosial\C_Pengeluaran::tambah');
$routes->get('/admin/edit-pengeluaran-sosial/(:any)', 'Kas_Sosial\C_Pengeluaran::edit/$1');
$routes->post('/admin/update-pengeluaran-sosial/(:any)', 'Kas_Sosial\C_Pengeluaran::update/$1');
$routes->post('/admin/delete-pengeluaran-sosial/(:any)', 'Kas_Sosial\C_Pengeluaran::delete/$1');
// Admin rekap kas sosial
$routes->get('/admin/rekap-kas-sosial', 'Kas_Sosial\C_Rekap_Kas::index');
$routes->post('/admin/sortir-sosial', 'Kas_Sosial\C_Rekap_Kas::sortirData');
// Laporan kas masjid
$routes->get('/admin/laporan-masjid', 'Kas_Masjid\C_Laporan::view');
$routes->post('/admin/cetak-laporan-masjid', 'Kas_Masjid\C_Laporan::cetak');
// Laporan kas sosial
$routes->get('/admin/laporan-sosial', 'Kas_Sosial\C_Laporan::view');
$routes->post('/admin/cetak-laporan-sosial', 'Kas_Sosial\C_Laporan::cetak');
// Geleri
$routes->get('/admin/galeri', 'Content\C_Galeri::index');
$routes->post('/admin/tambah-galeri', 'Content\C_Galeri::tambah');
$routes->get('/admin/edit-galeri/(:any)', 'Content\C_Galeri::edit/$1');
$routes->post('/admin/update-galeri/(:any)', 'Content\C_Galeri::update/$1');
$routes->post('/admin/delete-galeri/(:any)', 'Content\C_Galeri::delete/$1');
// Kepengurusan
$routes->get('/admin/kepengurusan', 'Content\C_Kepengurusan::index');
$routes->post('/admin/tambah-kepengurusan', 'Content\C_Kepengurusan::tambah');
$routes->get('/admin/edit-kepengurusan/(:any)', 'Content\C_Kepengurusan::edit/$1');
$routes->post('/admin/update-kepengurusan/(:any)', 'Content\C_Kepengurusan::update/$1');
$routes->post('/admin/delete-kepengurusan/(:any)', 'Content\C_Kepengurusan::delete/$1');
