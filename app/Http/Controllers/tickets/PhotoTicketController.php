<?php

namespace App\Http\Controllers\tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use Illuminate\Http\Request;

class PhotoTicketController extends Controller
{

    public function show()
    {
        $ticketPhotoAll = Tickets::find(request('ticketId'))->ticketsPhoto;

        return view('ticket_photo', compact('ticketPhotoAll'));
    }
}
