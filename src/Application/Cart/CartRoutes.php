<?php

namespace Src\Application\Cart;

use Illuminate\Support\Facades\Route;

class CartRoutes
{
    public static function configRoutes(){
        Route::get('/cart', 'Src\Application\Cart\CartController@index')->name("cart.index");
        Route::get('/cart/delete', 'Src\Application\Cart\CartController@delete')->name("cart.delete");
        Route::post('/cart/add/{id}', 'Src\Application\Cart\CartController@add')->name("cart.add");
        Route::middleware('auth')->group(function () {
            Route::get('/cart/purchase', 'Src\Application\Cart\CartController@purchase')->name("cart.purchase");
        });
    }
}