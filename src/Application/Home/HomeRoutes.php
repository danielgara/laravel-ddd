<?php

namespace Src\Application\Home;

use Illuminate\Support\Facades\Route;

class HomeRoutes
{
    public static function configRoutes(){
        Route::get('/', 'Src\Application\Home\HomeController@index')->name("home.index");
        Route::get('/about', 'Src\Application\Home\HomeController@about')->name("home.about");
    }
}