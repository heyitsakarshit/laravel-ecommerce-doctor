<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class HospitalMiddleware
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

        if(empty(Session::has('hospitalSession'))){
            return redirect('/hospitaladmin');
        }
        return $next($request);
    }
}
