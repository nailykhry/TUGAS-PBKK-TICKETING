<?php

namespace Config;

use App\Controllers\Home;
use CodeIgniter\Config\Services;
use App\Controllers\FlightController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//flight
$routes->get('/flights', 'FlightController::index');
$routes->get('/flights/(:num)', 'FlightController::show/$1');
$routes->put('/flights/(:num)', 'FlightController::update/$1');
$routes->post('/flights', 'FlightController::store');
$routes->delete('/flights/(:num)', 'FlightController::delete/$1');

//dashboard
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/createflight', 'DashboardController::create');
$routes->get('/editflight/(:num)', 'DashboardController::edit/$1');



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
