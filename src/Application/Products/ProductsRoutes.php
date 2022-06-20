<?php

namespace Src\Application\Products;

use Illuminate\Support\Facades\Route;

class ProductsRoutes
{
    public static function configRoutes(){
        Route::get('/products', 'Src\Application\Products\Controllers\ProductsController@index')->name("product.index");
        Route::get('/products/{id}', 'Src\Application\Products\Controllers\ProductsController@show')->name("product.show");
    }
}