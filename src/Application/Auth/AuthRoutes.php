<?php

namespace Src\Application\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AuthRoutes
{
    public static function configRoutes(){
        Auth::routes();
    }
}