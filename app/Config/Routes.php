<?php

namespace Config;

$routes = Services::routes();

// Route default
$routes->get('/', 'Home::index');

// Route untuk Dashboard User
$routes->get('/dashboard', 'DashboardUserController::index');

// Route untuk Login
$routes->get('/login', 'LoginController::index');

// Route untuk Profile
$routes->get('/profile', 'ProfileController::index');

// Route untuk Registrasi
$routes->get('/registrasi', 'RegistrasiController::index');

// Route untuk progress

// Route untuk Tambah Progress
$routes->get('/progress', 'ProgressController::index');
$routes->get('/progress/tambah', 'ProgressController::add');
$routes->get('/progress/edit/(:num)', 'ProgressController::edit/$1');
$routes->post('/progress/update/(:num)', 'ProgressController::update/$1');
$routes->get('/progress/detail/(:num)', 'ProgressController::detail/$1');
