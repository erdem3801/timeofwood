<?php

namespace Config;

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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.ü
$routes->match(['get','post'],'login','User::login');
$routes->get('logout','User::logout');
$routes->get('admin','User::login');
 
$routes->group('product',['filter'=>'Auth'], function($routes){ 
	
	$routes->get('sil/(:num)','Product::sil/$1');
	$routes->get('galeri/sil/(:num)/(:num)','Product::galeri_sil/$1/$2');
	$routes->get('/','Product::listele'); 
	$routes->post('reorder','Product::reorder');
	$routes->match(['get','post'],'ekle','Product::ekle');
	$routes->match(['get' , 'post'],'edit/(:num)','Product::edit/$1');
	$routes->match(['get','post'],'galeri/(:num)','Product::galeri/$1');
});

$routes->get('/', 'Home::index');
$routes->post('/sendmail', 'Home::send'); 
$routes->match(['get','post'], '(:any)', 'Home::index/$1');


/*
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
