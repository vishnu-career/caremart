<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->post('login', 'Home::login');
$routes->match(['get', 'post'], '/admin', 'Home::index');

// $routes->get('regestration', 'Home::regestration');
$routes->get('home', 'Home::home');
$routes->get('show', 'Home::show');
$routes->get('/logout', 'Home::logout');
$routes->get('dashboard', 'Home::dashboard');
$routes->get('dashboard2', 'Home::dashboard2');
$routes->get('product', 'Home::product');          // Show images to user
$routes->get('image-list', 'Home::imageList');     // View all uploaded images (DetailsShow)
$routes->get('upload-image', 'Home::uploadForm');  // Show image upload form (upimage)
$routes->post('save', 'Home::save');               // Handle image upload
$routes->get('toggle/(:num)', 'Home::toggle/$1');  // Toggle active/inactive status
$routes->get('edit/(:num)', 'Home::edit/$1');      // Edit image form (edit_image)
$routes->post('update/(:num)', 'Home::update/$1'); // Handle image update
$routes->get('upimage', 'Home::uploadForm');
$routes->get('DetailsShow', 'Home::imageList');
$routes->get('/', 'Home::userIndex'); // Edit image form (edit_image)
$routes->get('delete/(:num)', 'Home::delete/$1');
$routes->get('upimages', 'Home::dashboard');
$routes->post('saveProduct', 'Home::saveProduct');
$routes->get('product-list', 'Home::productList');           // Handle image update
$routes->get('product-list/(:num)', 'Home::productList/$1'); // Handle image update
$routes->get('product-list', 'Home::productList');
$routes->get('product_list', 'Home::productList');
$routes->get('product_toggle/(:num)', 'Home::productToggle/$1');
$routes->get('product_edit/(:num)', 'Home::productEdit/$1');
$routes->post('product_update/(:num)', 'Home::productUpdate/$1');
$routes->get('product-edit/(:num)', 'Home::productEdit/$1');
$routes->post('product-update/(:num)', 'Home::productUpdate/$1');
$routes->get('product-list', 'Home::productList');
$routes->get('product-toggle/(:num)', 'Home::productToggle/$1');
$routes->get('product-edit/(:num)', 'Home::productEdit/$1');
$routes->post('product-update/(:num)', 'Home::productUpdate/$1');
$routes->get('products', 'Home::userProduct');
$routes->get('user-products', 'Home::userWithProducts');
$routes->get('product-delete/(:num)', 'Home::deleteProduct/$1');

$routes->get('user', 'Home::userWithProducts');
$routes->get('tour', 'Home::tour');
$routes->get('add-tour', 'Home::addTour');
$routes->post('add-tour', 'Home::addTour');
$routes->get('tour', 'Home::tour');
$routes->get('add-tour', 'Home::addtour');
$routes->post('insert-tour', 'Home::inserttour');
$routes->get('delete-tour/(:num)', 'Home::deletetour/$1');
$routes->get('toggle-status/(:num)', 'Home::toggleStatus/$1');
$routes->get('edit-tour/(:num)', 'Home::edittour/$1');
$routes->post('update-tour/(:num)', 'Home::updatetour/$1');
$routes->get('/achievers', 'Home::achieverTours');
$routes->get('awards', 'Home::awards');
$routes->get('add-awards', 'Home::addawards');
$routes->post('add-awards', 'Home::addawards');       // Optional (if needed)
$routes->post('insert-awards', 'Home::insertawards'); // ✅ Add this
$routes->get('edit-awards/(:num)', 'Home::editawards/$1');
$routes->get('edit-awards/(:num)', 'Home::editawards/$1');

$routes->post('update-awards/(:num)', 'Home::updateawards/$1');
$routes->get('delete-awards/(:num)', 'Home::deleteawards/$1');
$routes->get('toggle-statusawards/(:num)', 'Home::toggleStatusawards/$1');
