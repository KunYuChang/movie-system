<?php

namespace Config;

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

// php spark routes

$routes->group('dashboard', function($routes) {
    $routes->get('user/create', '\App\Controllers\Web\User::create_user');
    $routes->presenter('movie', ['controller' => 'Dashboard\Movie']);
    $routes->presenter('category', ['controller' => 'Dashboard\Category']);

    // php spark routes 只會看到 category
    // $routes->presenter('category', ['only']);
    // $routes->presenter('category', ['only' => 'index']);
    // $routes->presenter('category', ['only' => ['index', 'new', 'create']]);
    // $routes->presenter('category', ['except' => ['index', 'new', 'create']]);
});

// Login
$routes->get('login', '\App\Controllers\Web\user::login', ['as' => 'user.login']);
$routes->get('login_post', '\App\Controllers\Web\user::login', ['as' => 'user.login_post']);

// Register
$routes->get('register', '\App\Controllers\Web\user::register', ['as' => 'user.register']);
$routes->get('register_post', '\App\Controllers\Web\user::register', ['as' => 'user.register_post']);



//$routes->get('/', 'Home::index');
//$routes->get('/movie', 'Movie::index');
//$routes->get('/movie/new', 'Movie::create');
//$routes->get('/movie/edit/(:num)', 'Movie::create/$1');

// $routes->get('/index', 'Home::index');
// $routes->get('/show/(:num)', 'Home::show/$1');
// $routes->get('/new', 'Home::new');
// $routes->post('/create', 'Home::create');
// $routes->get('/edit/(:num)', 'Home::edit');
// $routes->put('/update/(:num)', 'Home::update/$1');
// $routes->delete('/delete/(:num)', 'Home::delete/$1');
// $routes->get('/update/(:any)', 'Home::update/$1');
// $routes->get('/update/(:num)/(:num)', 'Home::update/$1/$2');

/****************************************************************
 * CI4 提供的方法 : 資源路由
 ****************************************************************/
// $routes->resource('photos');
// // 同等於以下內容:
// $routes->get('photos/new',             'Photos::new');
// $routes->post('photos',                'Photos::create');
// $routes->get('photos',                 'Photos::index');
// $routes->get('photos/(:segment)',      'Photos::show/$1');
// $routes->get('photos/(:segment)/edit', 'Photos::edit/$1');
// $routes->put('photos/(:segment)',      'Photos::update/$1');
// $routes->patch('photos/(:segment)',    'Photos::update/$1');
// $routes->delete('photos/(:segment)',   'Photos::delete/$1');

/****************************************************************
 * CI4 提供的方法 : 表現層路由
 ****************************************************************/
// $routes->presenter('photos');
// // 同等於以下內容:
// $routes->get('photos/new',                'Photos::new');
// $routes->post('photos/create',            'Photos::create');
// $routes->post('photos',                   'Photos::create');   // alias
// $routes->get('photos',                    'Photos::index');
// $routes->get('photos/show/(:segment)',    'Photos::show/$1');
// $routes->get('photos/(:segment)',         'Photos::show/$1');  // alias
// $routes->get('photos/edit/(:segment)',    'Photos::edit/$1');
// $routes->post('photos/update/(:segment)', 'Photos::update/$1');
// $routes->get('photos/remove/(:segment)',  'Photos::remove/$1');
// $routes->post('photos/delete/(:segment)', 'Photos::update/$1');

// php spark routes

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
