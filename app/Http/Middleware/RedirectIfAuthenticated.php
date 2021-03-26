<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

      /////////////////////////////function handle por defecto///////////////////////

    /* public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    } */

///////////////////////////////////////////////////////////////////////////////////////////

    public function handle($request, Closure $next, $guard = null) //////////esta funcion redirige a quien se a logueado
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) { ///////////// El guard recibido es admin y el guard existe?
            return redirect()->route('home');              // redirecciona a name->admin.dasboard
        }

        if (Auth::guard($guard)->check()) { /////////////  el guard existe?
            return redirect()->route('home');                       // // redirecciona a name->home
        }

        return $next($request);
    }
}

