<?php

$backendRoutes = function()
{
    Route::resource('groups', 'GroupsController');
    Route::resource('products', 'ProductsController');
};

Route::group([
    'prefix' => 'backend',
    'namespace' => 'Backend'
], $backendRoutes);