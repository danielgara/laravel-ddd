<?php

namespace Src\Application\Account;

use Illuminate\Support\Facades\Route;

class AccountRoutes
{
    public static function configRoutes(){
        Route::middleware('auth')->group(function () {
            Route::get('/my-account/orders', 'Src\Application\Account\AccountController@orders')->name("myaccount.orders");
        });
    }
}