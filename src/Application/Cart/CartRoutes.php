<?php

namespace Src\Application\Cart;

use Illuminate\Support\Facades\Route;

class CartRoutes
{
    public static function configRoutes(){
        Route::get('/cart', 'Src\Application\Cart\Controllers\CartController@index')->name("cart.index");
        Route::get('/cart/delete', 'Src\Application\Cart\Controllers\CartController@delete')->name("cart.delete");
        Route::post('/cart/add/{id}', 'Src\Application\Cart\Controllers\CartController@add')->name("cart.add");
        Route::middleware('auth')->group(function () {
            Route::get('/cart/purchase', 'Src\Application\Cart\Controllers\CartController@purchase')->name("cart.purchase");
        });
    }
}