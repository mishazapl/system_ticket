<?php

namespace App\Http\Controllers\tickets;

use App\Tickets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('cabinetUser');
    }

    public function show()
    {
        $ticket = Tickets::all()->where('user_id', '=', Auth::user()->id)->toArray();

        return view('user', compact('ticket'));
    }
}
