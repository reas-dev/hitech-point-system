<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Developer
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
        if (Auth::user()->role == 'developer'){
            return $next($request);
        }
        if (Auth::user()->role == 'admin'){
            return redirect(url('/admin'));
        }
        elseif (Auth::user()->role == 'visitor'){
            return redirect(url('/visitor'));
        }
        else {
            return redirect(url('/'));
        }
    }
}
