<?php

namespace App\Http\Controllers\tickets;

use App\Http\Controllers\Controller;
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

        return view('user', compact('user', 'tickets'));
    }
}
