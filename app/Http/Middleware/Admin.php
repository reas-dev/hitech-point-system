<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role == 'admin'){
            return $next($request);
        }
        if (Auth::user()->role == 'developer'){
            return redirect(url('/developer'));
        }
        elseif (Auth::user()->role == 'visitor'){
            return redirect(url('/visitor'));
        }
        else {
            return redirect(url('/'));
        }
    }
}
