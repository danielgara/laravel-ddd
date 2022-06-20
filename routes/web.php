<?php

use Illuminate\Support\Facades\Route;

use Src\Application\Account\AccountRoutes;
use Src\Application\Admin\AdminRoutes;
use Src\Application\Auth\AuthRoutes;
use Src\Application\Cart\CartRoutes;
use Src\Application\Home\HomeRoutes;
use Src\Application\Products\ProductsRoutes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

HomeRoutes::configRoutes();
ProductsRoutes::configRoutes();
CartRoutes::configRoutes();
AccountRoutes::configRoutes();
AdminRoutes::configRoutes();
AuthRoutes::configRoutes();