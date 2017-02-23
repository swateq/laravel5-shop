<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\users;

Route::get('/', function () {
    return redirect('/page/main_page');
});


Route::get('/register', function () {
    return view('register');
});

Route::post('/user/register', array('uses'=>'UserRegistration@postRegister'));

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', 'AdminController@index')->name('dashboard');
    Route::get('/admin/page/{id}', 'PageController@adminPage');
    Route::get('users', 'AdminController@users')->name('users');
    Route::get('products', 'ProductsController@index')->name('products');
});

Route::auth();

/*  CART  */
Route::get('/cart', 'HomeController@cart');
Route::get('/cart/{id}', 'HomeController@cartCookie');
Route::get('/cart/get', 'HomeController@getCookie');
Route::post('/cart/add/{id}', 'OrdersController@addToCart');
Route::post('/cart/remove/{id}','OrdersController@removeFromCart');

/* PRODUKTY  */
Route::get('/product/{seolink}', ['uses' =>'ProductsController@showProduct']);
Route::get('/products/edit/{product_id}', ['uses' =>'ProductsController@getProduct']);
Route::get('/products/add', ['uses' =>'ProductsController@addProduct']);
Route::get('products/productsDetails/{id}', 'ProductsController@viewProduct');

Route::delete('/products/delete/{product_id}', ['uses' =>'ProductsController@deleteProduct']);

Route::post('/product/add', 'ProductsController@addProduct');

Route::put('/products/edit/{product_id}', ['uses' =>'ProductsController@editProduct']);

/* OTHER  */
Route::get('/shops/show/{shop_id}', ['uses' =>'PageController@getShop']);
Route::get('/page/{name}', ['uses' =>'PageController@showPage']);
