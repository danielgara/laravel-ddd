<?php

namespace Src\Application\Admin\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->getRole() == 'admin') {
            return $next($request);
        } else {
            return redirect()->route('home.index');
        }
    }
}
