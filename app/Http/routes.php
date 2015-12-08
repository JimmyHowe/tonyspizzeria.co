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

Route::resource('api/users', 'Api\UsersController');
Route::resource('api/address', 'Api\AddressesController');
Route::resource('api/orders', 'Api\OrdersController');
Route::resource('api/products', 'Api\ProductsController');

Route::get('/', function () {
    return view('welcome');
});
