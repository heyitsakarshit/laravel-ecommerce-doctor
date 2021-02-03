<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class AlladminMiddleware
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

        if(empty(Session::has('alladminSession')))
        {

            return redirect('/alllogin');
        }

        return $next($request);
    }
}
