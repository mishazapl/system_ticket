<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class RightEditAdmin
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

        if (is_null(Auth::user())) {
            return abort(404);
        } elseif (is_null(request('id')) || is_null(User::find(Auth::user()->id)->admin)) {
            return abort(404);
        }

        return $next($request);
    }
}
