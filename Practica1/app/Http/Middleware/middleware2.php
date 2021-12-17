<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class middleware2
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
        echo "Buenas esto se crea de manera automatica y no como Pepito";
        return $next($request);
    }
}
