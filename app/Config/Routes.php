<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/** <-------------------------------------------------> */


/** <---------------DEFAULT VIEW OR LANDING PAGE ROUTE-----------------> */
$routes->get('/',                              'Reservation::landing');


/** <--------------- CRUD for RESERVATION BOOKING ---------------------> */

$routes->get('/reservation',                   'Reservation::reservation');
$routes->post('/addbook',                      'Reservation::save');
$routes->get('/reservation/edit/(:num)',       'Reservation::edit/$1');
$routes->get('/reservation/update/(:num)',     'Reservation::update/$1');

$routes->get('/reservation_report',            'Reservation::reservation_report');
$routes->match(['get', 'post'], '/reservation_exportreport','Reservation::reservation_exportreport');


/** <---------------USER INTERFACE OR USER VIEW ROUTE------------------> */
$routes->get('/index',                         'Reservation::index');
$routes->get('/design',                        'Reservation::design');
$routes->get('/booknow',                       'Reservation::booknow');
$routes->get('/products',                      'Reservation::products');
$routes->get('/bookoverview',                  'Reservation::bookoverview');


/** <-----------------PRODUCTS w/ IMAGE CRUD FUNCTION -----------------> */
$routes->get('/product_category',              'ProductController::product_category');
$routes->post('/addcategory',                  'ProductController::addcategory');


$routes->get('/product_list',                  'ProductController::product_list');
$routes->get('/addproduct',                    'ProductController::create');
$routes->post('/saveproduct',                  'ProductController::save');
$routes->get('/product_list/edit/(:num)',      'ProductController::edit/$1');
$routes->post('/product_list/update/(:num)',   'ProductController::update/$1');
$routes->get('/product_list/delete/(:num)',    'ProductController::delete/$1');


$routes->get('/design_list',                   'ProductController::design_list');
$routes->get('/adddesign',                     'ProductController::design_create');
$routes->post('/savedesign',                   'ProductController::design_save');
$routes->get('/design_list/edit/(:num)',      'ProductController::design_edit/$1');
$routes->post('/design_list/update/(:num)',   'ProductController::design_update/$1');

/** <---------------ADD TO CART ROUTE---------------------------------> */

$routes->get('/product_cart',                  'CartController::product_cart');
$routes->post('/addtocart',                    'CartController::addtocart');

/** <---------------ADMIN LOGIN ROUTE----------------------------------> */
$routes->get('/admin',                         'AdminController::admin');

/** <---------------CRUD FOR ADMIN ROUTE-------------------------------> */
$routes->match(['get', 'post'], '/create',     'AuthController::create');               /** Create that is located in AuthController*/
$routes->get('/edit(:num)',                    'AdminController::edit/$1');             /** Edit */
$routes->post('/update(:num)',                 'AdminController::update/$1');           /** Update */
$routes->get('/delete(:num)',                  'AdminController::delete/$1');           /** Delete */
$routes->get('/users',                         'AdminController::users');


/**-------- USER LOGIN AND REGISTRATION ROUTE---------------------------> */
$routes->get('/login',                         'AuthController::login');
$routes->get('/index',                         'UserController::index');
$routes->match(['get', 'post'], 'check',       'AuthController::check');
$routes->get('/register',                      'AuthController::register');  

$routes->get('/layout/registerpage',           'AuthController::create');
$routes->get('/layout/loginpage',              'AuthController::check');
$routes->get('/layout/loginpage',              'AuthController::login');
$routes->get('/layout/registerpage',           'AuthController::register');


/**-------- ADMIN DASHBOARD ROUTE ---------------------------------------> */


$routes->get('/dashboard', 'AdminController::dashboard');
$routes->get('/pos', 'AdminController::pos');
$routes->get('/order_list', 'AdminController::order_list');
$routes->get('/sales_report', 'AdminController::sales_report');
$routes->get('/delivery_list', 'AdminController::delivery_list');




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
