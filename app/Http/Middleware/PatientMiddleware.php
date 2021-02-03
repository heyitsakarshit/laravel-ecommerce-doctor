<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class PatientMiddleware
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
        if(empty(Session::has('patientSession')))
        {

            return redirect('/user-login-register');
        }

        return $next($request);
    }
    
}
