<?php

namespace App\Http\Controllers\tickets;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminChangeTicketRequest;
use App\Status;
use App\TicketPhoto;
use App\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChangeAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightEditAdmin');
    }

    public function show()
    {
        $allCatsArr = Categories::all();

        $ticket = Tickets::find(request('id'));

        $allStatus = Status::all();

        foreach ($ticket->categories as $categoryUser) {
            $categUser[$categoryUser->id] = $categoryUser->name;
        }

        return view('edit_admin_ticket', compact('ticket', 'allCatsArr', 'categUser', 'allStatus'));
    }

    public function store(AdminChangeTicketRequest $request)
    {
        /**
         * Сохранение тикета
         */

        $model = Tickets::find(request('id'));
        $model->user_id = Auth::user()->id;
        $model->theme = $request->post('theme');
        $model->message = $request->post('message');
        $model->save();


        /**
         * Сохранение связанных категорий
         */

        $model->categories()->sync($request->post('categories'));

        $model->status()->sync($request->post('status'));


        if ($request->file('photo') != null) {
            foreach ($request->file('photo') as $photo) {
                $path = Storage::put('uploads/' . $model->id, $photo);
                $savePhoto = new TicketPhoto;
                $savePhoto->tickets_id = $model->id;
                $savePhoto->link = $path;
                $savePhoto->save();
            }
        }

        /**
         * Удаление файлов
         */

        if ($request->post('photoDel') != null) {
            foreach ($request->post('photoDel') as $delPhoto) {
                $ticketsPhoto = Tickets::find(request('id'))->ticketsPhoto->where('link', '=', $delPhoto)->first();
                $ticketsPhoto->delete();
                Storage::delete($delPhoto);
            }
        }
        return redirect('/admin/edit/' . request('id'));
    }

}
