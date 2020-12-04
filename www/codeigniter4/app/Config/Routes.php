<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Site');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// /site
$routes->get('/', 'Site::index');
$routes->get('/home', 'Site::view/home');
$routes->get('/about', 'Site::view/about');
$routes->get('/products', 'Site::view/products');
$routes->get('/contact', 'Site::view/contact');

// /site/clients
$routes->get('/clients', 'Clients::listClients');
$routes->get('/clients/(:num)', 'Clients::detailsClient/$1');

// /admin
$routes->add('/admin', 'Admin\Admin::index');
$routes->add('/admin/logout', 'Admin\Admin::logout');
$routes->add('/admin/login', 'Admin\Admin::login');

$routes->add('/admin/validate-login', 'Admin\Users::validateLogin');

// /admin/clients
$routes->add('/admin/clients', 'Admin\Clients::listClients');
$routes->add('/admin/clients/(:num)', 'Admin\Clients::details/$1');

$routes->add('/admin/clients/insert', 'Admin\Clients::insert');
$routes->add('/admin/clients/insert-action', 'Admin\Clients::insertAction');

$routes->add('/admin/clients/update/(:num)', 'Admin\Clients::update/$1');
$routes->add('/admin/clients/update-action/(:num)', 'Admin\Clients::updateAction/$1');

$routes->add('/admin/clients/delete/(:num)', 'Admin\Clients::delete/$1');

//Api
$routes->get('/api/clients', 'Api\Clients::listClients');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
