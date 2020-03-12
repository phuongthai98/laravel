<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $cus;

    public function __construct()
    {
        
    }

    public function handle($request, Closure $next, $guard = 'cus')
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
        }
        return redirect()->route('home');
    }


}
