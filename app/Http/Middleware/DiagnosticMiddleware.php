<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class DiagnosticMiddleware
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
        if(empty(Session::has('diagnosticSession')))
        {

            return redirect('/diagnosticadmin');
        }
        return $next($request);
    }
}
