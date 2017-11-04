<?php

namespace App\Http\Middleware;

use App\Tickets;
use Closure;
use Illuminate\Support\Facades\Auth;

class RightEditUser
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
        $ticket = Tickets::find(request('id'));

        if ($ticket == null) {
            return abort(404);
        } elseif ($ticket->user_id != Auth::user()->id || $ticket->status != 'Новый') {
            return abort(404 );
        }

        return $next($request);
    }
}
