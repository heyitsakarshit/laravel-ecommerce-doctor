<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class DoctorMiddleware
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

        if(empty(Session::has('doctorSession')))
        {

            return redirect('/doctoradmin');
        }

        return $next($request);
    }
}
