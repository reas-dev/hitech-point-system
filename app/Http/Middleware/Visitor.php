<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Visitor
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
        if (Auth::user()->role == 'visitor'){
            return $next($request);
        }
        if (Auth::user()->role == 'admin'){
            return redirect(url('/admin'));
        }
        elseif (Auth::user()->role == 'developer'){
            return redirect(url('/developer'));
        }
        else {
            return redirect(url('/'));
        }
    }
}
