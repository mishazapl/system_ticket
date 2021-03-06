<?php

namespace App\Http\Controllers\tickets;

use App\Tickets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DeleteUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightEditUser');
    }

    public function delete()
    {
        $model = Tickets::find(request('id'));
        $model->delete();
        Storage::deleteDirectory('uploads/'.$model->id);
        return redirect('/user/'.Auth::user()->id);
    }
}
