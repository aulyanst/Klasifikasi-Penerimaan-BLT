<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routes Admin
$routes->get('/admin','Admin::index');

// Menampilkan halaman dashboard
$routes->get('admin/dashboard', 'Dashboard::index');

// Menampilkan halaman data testing
$routes->get('admin/testing', 'Testing::index');
$routes->get('admin/testing/create', 'Testing::create', ['as' => 'testing.create']);
$routes->post('admin/testing/store', 'Testing::store');
$routes->get('admin/testing/edit/(:num)', 'Testing::edit/$1');
$routes->post('admin/testing/update', 'Admin::updateTesting');
$routes->post('admin/testing/update/(:num)', 'Testing::update/$1');
$routes->get('admin/testing/delete/(:num)', 'Testing::delete/$1');
$routes->get('admin/testing/find/(:num)', 'Testing::find/$1');

// Menampilkan Halaman Data training
$routes->get('admin/training', 'Training::index');
$routes->get('admin/training/create', 'Training::create', ['as' => 'training.create']);
$routes->post('admin/training/store', 'Training::store');
$routes->get('admin/training/edit/(:num)', 'Training::edit/$1');
$routes->post('admin/training/update', 'Admin::updateTraining');
$routes->post('admin/training/update/(:num)', 'Training::update/$1');
$routes->get('admin/training/delete/(:num)', 'Training::delete/$1');
$routes->get('admin/training/find/(:num)', 'Training::find/$1');

// routes untuk menampilkan data prediksi
$routes->get('admin/prediction', 'Prediction::index');

// Routes menampilkan halaman Login
$routes->get('admin/login', 'Login::index');
$routes->get('admin/profil', 'Profil::index');

// Menampilkan halaman upload
$routes->get('admin/upload', 'Upload::index');

$routes->post('/import-excel', 'ExcelImportController::import');
$routes->get('/excel-form', 'ExcelFormController::index');
