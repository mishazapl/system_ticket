<?php

namespace App\Http\Controllers\tickets;

use App\Tickets;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('cabinetAdmin');
    }

    public function show()
    {
//        dump($user = User::find(Auth::user()->id)->admin->id);

        $tickets = Tickets::all();

        return view('admin', compact('tickets'));
    }
}
