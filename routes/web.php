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

Route::get('/shop', 'Front\ShopController@index')->name('shop');
Route::get('/shop/{id}', 'Front\ShopController@show')->name('shop.detail');
Route::post('/shop/{id}/add', 'Front\CartController@add')->name('cart.add');
Route::get('/cart', 'Front\CartController@index')->name('cart');
Route::get('/cart/{id}/delete', 'Front\CartController@delete')->name('cart.delete');

Route::get('/contact', function () {
    return view('front.contact.index');
});

Route::get('/1/cart/checkout', function () {
    return view('front.cart.checkout');
});

Route::get('/about', function () {
    return view('front.about.index');
});

Route::get('/thankyou', function () {
    return view('front.cart.thankyou');
});

Auth::routes();
Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('user.register');
Route::post('/register', 'Auth\RegisterController@register')->name('user.register.submit');
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::group(['prefix' => 'admin.login'], function () {
    Route::get('/', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
});

Route::group(['prefix' => 'admin','middleware' => 'auth:admin'], function () {
    Route::get('/home', 'Admin\DashboardController@index')->name('admin.dashboard');

    // Products
    Route::get('products/search', 'Admin\ProductController@search')->name('products.search');
    Route::post('products/{id}/trash', 'Admin\ProductController@trash')->name('products.trash');
    Route::resource('products','Admin\ProductController');
});

// Route::get('/admin.panel/dashboard', function () {
//     return view('admin.dashboard.index');
// });

