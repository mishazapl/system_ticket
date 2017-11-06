<?php

namespace App\Http\Controllers\tickets;

use App\Tickets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DeleteAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightEditAdmin');
    }

    public function delete()
    {
        $model = Tickets::find(request('id'));
        $model->delete();
        Storage::deleteDirectory('uploads/'.$model->id);
        return redirect('/admin/'.Auth::user()->id);
    }
}
