<?php

namespace App\Http\Controllers\tickets;

use App\Tickets;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketPageController extends Controller
{
    public function show()
    {
        $ticket = Tickets::find(request('id'));

        return view('ticket_page', compact('ticket'));
    }
}
