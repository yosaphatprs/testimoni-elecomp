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

// Route untuk Edit Profile
$routes->get('/profile/edit', 'ProfileController::edit');

// Route untuk Registrasi
$routes->get('/registrasi', 'RegistrasiController::index');

// Route untuk progress

// Route untuk Tambah Progress
$routes->get('/progress/tambah', 'ProgressController::add');