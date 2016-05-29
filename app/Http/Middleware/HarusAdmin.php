<?php

namespace App\Http\Middleware;

use Closure;

class HarusAdmin
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
        if (\Config::get('auth.defaults.guard') !== 'admin') {
          abort(403, 'Anda tidak bisa mengakses halaman ini');
        }
        return $next($request);
    }
}
