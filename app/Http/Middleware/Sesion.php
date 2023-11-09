<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Sesion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $usuario = session('usuario');

        if(is_null($usuario)) return redirect()->route('adm.login');
        return $next($request);
    }
}
