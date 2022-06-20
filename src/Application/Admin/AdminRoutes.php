<?php

namespace Src\Application\Admin;

use Illuminate\Support\Facades\Route;

class AdminRoutes
{
    public static function configRoutes(){
        Route::middleware('admin')->group(function () {
            Route::get('/admin', 'Src\Application\Admin\Controllers\AdminHomeController@index')->name("admin.home.index");
            Route::get('/admin/products', 'Src\Application\Admin\Controllers\AdminProductController@index')->name("admin.product.index");
            Route::post('/admin/products/store', 'Src\Application\Admin\Controllers\AdminProductController@store')->name("admin.product.store");
            Route::delete('/admin/products/{id}/delete', 'Src\Application\Admin\Controllers\AdminProductController@delete')->name("admin.product.delete");
            Route::get('/admin/products/{id}/edit', 'Src\Application\Admin\Controllers\AdminProductController@edit')->name("admin.product.edit");
            Route::put('/admin/products/{id}/update', 'Src\Application\Admin\Controllers\AdminProductController@update')->name("admin.product.update");
        });
    }
}