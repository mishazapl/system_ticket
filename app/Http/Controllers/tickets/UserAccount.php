<?php

namespace App\Http\Controllers\tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserAccount extends Controller
{
    public function __construct()
    {
        $this->middleware('cabinetUser');
    }

    public function show()
    {
        $user = User::find(Auth::user()->id);

        $tickets = Tickets::all();
//        foreach ($tickets as $ticket) {
//            foreach ($ticket->categories as $category) {
//                dump($category->name);
//            }
//        }

        return view('user', compact('user', 'tickets'));
    }
}
