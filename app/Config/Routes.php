<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('departments/cet', 'DepartmentController::cet');
$routes->get('departments/cas', 'DepartmentController::cas');
$routes->get('departments/caf', 'DepartmentController::caf');
$routes->get('departments/cbm', 'DepartmentController::cbm');
$routes->get('departments/cvm', 'DepartmentController::cvm');
$routes->get('departments/ced', 'DepartmentController::ced');
$routes->get('/research', 'Research::index');
$routes->get('about', 'Home::about');

$routes->get('debug-baseurl', static function () {
    echo 'baseURL: ' . config('App')->baseURL;
});