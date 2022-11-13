<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;


class ValidationSession
{
    public function handle($request, Closure $next)
    {
        if(session()-> has('guest')){
            return redirect() -> route('/');
        }

        return $next($request);
    }
}
