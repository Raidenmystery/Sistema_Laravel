<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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

        if(auth()->user()->nivel == 'administrador'){

            return $next($request);

        }

        return redirect(‘home’)->with(‘error’,’Acceso denagado. No eres Administrador’);

    }
}

