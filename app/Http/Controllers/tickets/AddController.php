<?php

namespace App\Http\Controllers\tickets;

use App\Categories;
use App\Http\Requests\CreateTicketRequest;
use App\TicketPhoto;
use App\Tickets;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AddController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        /**
         * Получение категорий
         */

        $allCategories = Categories::all();

        return view('add_ticket', compact('allCategories'));
    }

    public function store(CreateTicketRequest $request)
    {

        /**
         * Сохранение тикета
         */

        $model = new Tickets();
        $model->user_id = Auth::user()->id;
        $model->theme = $request->post('theme');
        $model->message = $request->post('message');
        $model->save();

        /**
         * Сохранение связанных категорий
         */

        $model->categories()->sync($request->post('categories'));

        /**
         * Сохранение связанного статуса
         */

        $model->status()->sync($request->post('status'));


        /**
         * Сохранение файлов.
         */

        if ($request->file('photo') != null) {
            foreach ($request->file('photo') as $photo) {
                $path = Storage::put('uploads/'.$model->id, $photo);
                $savePhoto = new TicketPhoto;
                $savePhoto->tickets_id = $model->id;
                $savePhoto->link = $path;
                $savePhoto->save();
            }
        }

        return redirect('/user/'.Auth::user()->id);
    }


}
