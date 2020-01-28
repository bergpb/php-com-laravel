<?php

namespace estoque\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class Autenticador
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
        if(!$request->is('entrar', 'registrar') && !Auth::check()){
            return route('login');
        }

        return $next($request);
    }
}
