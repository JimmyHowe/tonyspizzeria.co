<?php

Route::resource('api/users', 'Api\UsersController');
Route::resource('api/address', 'Api\AddressesController');
Route::resource('api/orders', 'Api\OrdersController');
Route::resource('api/products', 'Api\ProductsController');
Route::resource('api/applications', 'Api\ApplicationsController');

Route::resource('api/menu', 'Api\MenuController');