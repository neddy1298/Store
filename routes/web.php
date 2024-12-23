<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Front\HomeController@index')->name('home');

// Shop
Route::get('/shop', 'Front\ShopController@index')->name('shop');
Route::get('/shop/{id}', 'Front\ShopController@show')->name('shop.detail');
Route::post('/shop/{id}/add', 'Front\CartController@add')->name('cart.add');

// Cart
Route::get('/cart', 'Front\CartController@index')->name('cart');
Route::get('/cart/{id}/delete', 'Front\CartController@delete')->name('cart.delete');

    // Proccess
    Route::get('/cart/checkout', 'Front\CartController@checkout')->name('cart.checkout');

// Order
Route::post('/order/{id}/create', 'Front\OrderController@create')->name('order.create');




Route::get('/contact', function () {
    return view('front.contact.index');
});


Route::get('/about', function () {
    return view('front.about.index');
});

Route::get('/thankyou', function () {
    return view('front.cart.thankyou');
});

Auth::routes(['register' => true]);
Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('user.register');
Route::post('/register', 'Auth\RegisterController@register')->name('user.register.submit');
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Admin Authentication Routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
});

// Admin Protected Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');

    // Products
    Route::get('products/search', 'Admin\ProductController@search')->name('products.search');
    Route::post('products/{id}/trash', 'Admin\ProductController@trash')->name('products.trash');
    Route::resource('products','Admin\ProductController');

    // User
    Route::get('user/','Admin\UserController@index')->name('user.index');
    Route::get('user/search','Admin\UserController@search')->name('user.search');
    Route::get('user/{id}','Admin\UserController@detail')->name('user.detail');
    Route::get('user/{id}/search','Admin\UserController@shippingSearch')->name('user.shipping.search');
    // Route::get('user/search', 'Admin\ProductController@search')->name('user.search');
    // Route::post('user/{id}/trash', 'Admin\ProductController@trash')->name('user.trash');

    // Shipping
    Route::get('shipping/','Admin\ShippingController@index')->name('shipping.index');
    Route::get('shipping/search', 'Admin\ShippingController@search')->name('shipping.search');
    Route::get('shipping/{id}','Admin\ShippingController@detail')->name('shipping.detail');
    // Route::post('shipping/{id}/trash', 'Admin\ProductController@trash')->name('shipping.trash');
});
