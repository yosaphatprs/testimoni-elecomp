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
