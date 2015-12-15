<?php

$backendRoutes = function()
{
    Route::resource('products', 'ProductsController');
};

Route::group([
    'prefix' => 'backend',
    'namespace' => 'Backend'
], $backendRoutes);