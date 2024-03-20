<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../bootstrap.php';

define('APPNAME', 'My Phonebook');

session_start();

$router = new \Bramus\Router\Router();

// Auth routes
// $router->post('/logout', '\App\Controllers\Auth\LoginController@destroy');
// $router->get('/register', '\App\Controllers\Auth\RegisterController@create');
// $router->post('/register', '\App\Controllers\Auth\RegisterController@store');
// $router->get('/login', '\App\Controllers\Auth\LoginController@create');
// $router->post('/login', '\App\Controllers\Auth\LoginController@store');

// Contact routes
// $router->get('/', '\App\Controllers\ContactsController@index');
// $router->get('/home', '\App\Controllers\ContactsController@index');
$router->get('/contacts/create', '\App\Controllers\ContactController@create');
$router->post('/contacts', '\App\Controllers\ContactController@store');
$router->set404('\App\Controllers\Controller@sendNotFound');
$router->get('/contacts/edit/(\d+)', '\App\Controllers\ContactController@edit');
$router->post('/contacts/(\d+)', '\App\Controllers\ContactController@update');
$router->post('/contacts/delete/(\d+)', '\App\Controllers\ContactController@destroy');
$router->get('/', '\App\Controllers\HomesController@index');
$router->get('/blog', '\App\Controllers\BlogsController@index');
$router->get('/about', '\App\Controllers\AboutsController@index');
$router->get('/product', '\App\Controllers\ProductsController@index');
$router->get('/product-detail1', '\App\Controllers\ProductDetailsController1@index');
$router->get('/product-detail2', '\App\Controllers\ProductDetailsController2@index');
$router->get('/product-detail3', '\App\Controllers\ProductDetailsController3@index');
$router->get('/contact', '\App\Controllers\ContactsController@index');
$router->get('/blog-detail', '\App\Controllers\BlogDetailController@index');
$router->get('/search', '\App\Controllers\SearchController@index');

// Auth blog-detail
$router->get('/blog-detail/(\d+)', '\App\Controllers\BlogDetailController@index');
$router->post('/danhgia', '\App\Controllers\BlogDetailController@store');
// $router->get('/cart', '\App\Controllers\CartController@index');
$router->post('/save-order', '\App\Controllers\CartController@saveOrder');

// Auth product-detail
$router->get('/product-detail/(\d+)', '\App\Controllers\ProductDetailsController@index');
$router->post('/danhgia', '\App\Controllers\BlogDetailController@store');

$router->post('/save-order', '\App\Controllers\CartController@saveOrder');

// Auth ThanhToan
$router->get('/cart/(\d+)', '\App\Controllers\CartController@index');
$router->post('/thanhtoan', '\App\Controllers\CartController@thanhToan');
// $router->post('/thanhtoan', '\App\Controllers\ProductsDetailController@addToCart');
// Auth routes
$router->post('/logout', '\App\Controllers\Auth\SignInController@destroy');
$router->get('/signup', '\App\Controllers\Auth\SignUpController@create');
$router->post('/signup', '\App\Controllers\Auth\SignUpController@store');
$router->get('/signin', '\App\Controllers\Auth\SignInController@create');
$router->post('/signin', '\App\Controllers\Auth\SignInController@store');

// Admin routes
$router->get('/baiviet', '\App\Controllers\Admin\BaivietController@index');
$router->get('/baiviet/add', '\App\Controllers\Admin\BaivietController@create');
$router->post('/baiviet', '\App\Controllers\Admin\BaivietController@store');
$router->get('/baiviet/edit/(\d+)', '\App\Controllers\Admin\BaivietController@edit');
$router->post('/baiviet/(\d+)', '\App\Controllers\Admin\BaivietController@update');
$router->post('/baiviet/delete/(\d+)', '\App\Controllers\Admin\BaivietController@destroy');

$router->get('/donhang', '\App\Controllers\Admin\DonhangController@index');
$router->get('/sanpham', '\App\Controllers\Admin\SanphamController@index');
$router->get('/sanpham/add', '\App\Controllers\Admin\SanphamController@create');
$router->post('/sanpham', '\App\Controllers\Admin\SanphamController@store');
$router->get('/sanpham/edit/(\d+)', '\App\Controllers\Admin\SanphamController@edit');
$router->post('/sanpham/(\d+)', '\App\Controllers\Admin\SanphamController@update');
$router->post('/sanpham/delete/(\d+)', '\App\Controllers\Admin\SanphamController@destroy');
$router->get('/index', '\App\Controllers\Admin\HomesController@index');
$router->post('/logout', '\App\Controllers\Admin\HomesController@destroy');
$router->run();
