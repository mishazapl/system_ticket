<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CabinetUser
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
        if (is_null(request('id'))) {
            return abort(404);
        } elseif (request('id') != Auth::user()->id) {
            return abort(404);
        }
        return $next($request);
    }
}
