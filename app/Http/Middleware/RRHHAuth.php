<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RRHHAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
            if(auth()-> user() -> empleado != null &&  auth()-> user() -> empleado -> permisoSistema -> nivelPermiso ==1){
                return $next($request);
            }
        }
        return redirect() -> to(route('talentoHumano.inicio'));
    }
}
