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

        if (!is_null($ticket)) {
            foreach ($ticket->status as $ticketStatus) {
            }
        }

        if (is_null($ticket)) {
            return abort(404);
        } elseif ($ticket->user_id != Auth::user()->id || $ticketStatus->name != 'Новый') {
            return abort(404 );
        }

        return $next($request);
    }
}
