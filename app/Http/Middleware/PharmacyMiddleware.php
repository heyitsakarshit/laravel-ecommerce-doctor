<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class PharmacyMiddleware
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

        if(empty(Session::has('pharmacySession')))
        {

            return redirect('/pharmacyadmin');
        }
        return $next($request);
    }
}
