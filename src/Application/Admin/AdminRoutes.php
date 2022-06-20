<?php

namespace Src\Application\Admin;

use Illuminate\Support\Facades\Route;

class AdminRoutes
{
    public static function configRoutes(){
        Route::middleware('admin')->group(function () {
            Route::get('/admin', 'Src\Application\Admin\AdminHomeController@index')->name("admin.home.index");
            Route::get('/admin/products', 'Src\Application\Admin\AdminProductController@index')->name("admin.product.index");
            Route::post('/admin/products/store', 'Src\Application\Admin\AdminProductController@store')->name("admin.product.store");
            Route::delete('/admin/products/{id}/delete', 'Src\Application\Admin\AdminProductController@delete')->name("admin.product.delete");
            Route::get('/admin/products/{id}/edit', 'Src\Application\Admin\AdminProductController@edit')->name("admin.product.edit");
            Route::put('/admin/products/{id}/update', 'Src\Application\Admin\AdminProductController@update')->name("admin.product.update");
        });
    }
}