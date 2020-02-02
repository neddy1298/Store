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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', function () {
    return view('front.shop.index');
});
Route::get('/shop/1', function () {
    return view('front.shop.single.index');
});

Route::get('/contact', function () {
    return view('front.contact.index');
});

Route::get('/1/cart', function () {
    return view('front.cart.index');
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

Route::group(['prefix' => 'admin-login'], function () {
    Route::get('/', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
});


Route::group(['prefix' => 'admin-panel','middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::get('/products', function () {
        return view('admin.product.index');
    });
    Route::get('/products/phone', function () {
        return view('admin.product.phone');
    });
    Route::get('/products/laptop', function () {
        return view('admin.product.laptop');
    });
    Route::get('/products/computer', function () {
        return view('admin.product.computer');
    });
    Route::get('/products/headphone', function () {
        return view('admin.product.headphone');
    });
    Route::get('/products/watch', function () {
        return view('admin.product.watch');
    });
});

// Route::get('/admin-panel/dashboard', function () {
//     return view('admin.dashboard.index');
// });

