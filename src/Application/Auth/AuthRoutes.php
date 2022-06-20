<?php

namespace Src\Application\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AuthRoutes
{
    public static function configRoutes(){
        Route::get('login', 'Src\Application\Auth\Controllers\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Src\Application\Auth\Controllers\LoginController@login');
        Route::get('register', 'Src\Application\Auth\Controllers\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Src\Application\Auth\Controllers\RegisterController@register');
        Route::post('logout', 'Src\Application\Auth\Controllers\LoginController@logout')->name('logout');
    }
}