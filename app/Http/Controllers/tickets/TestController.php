<?php

namespace App\Http\Controllers\tickets;

use App\Categories;
use App\TicketPhoto;
use App\Tickets;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Методы вставки.
     */

    public function insertTicket()
    {
//        $model = new Tickets();
//        $model->user_id = 1;
//        $model->theme = 'Война и мир';
//        $model->message = 'такую книгу кто-то написал';
//        $model->status = 'Новый';
//        $model->save();

    }
    public function insertPhoto()
    {
//        $model = new TicketPhoto();
//        $model->ticket_id = 1;
//        $model->link = 'app\resources\uploads\game25';
//
//        $model->save();
    }

    public function insertCategories()
    {
//        $model = new TicketCategory();
//        $model->ticket_id = 1;
//        $model->category_id = 1;
//        $model->save();


//        $model = new Categories();
//        $model->name = 'Критично';
//        $model->slug = 'kritichno';
//        $model->save();
    }

    public function associateCategory()
    {

    }


    /*
     * Методы выборки
     */

    /**
     * Выбрать с помощью тикета связанную с ним категорию
     */

    public function selectTicketCategory()
    {
//        $ticket = User::find(1);
//        dump($ticket->tickets->toArray());

//        $ticket = Tickets::find(1);
//        dump($ticket->ticketPhotos->toArray());

//        $ticket = TicketPhoto::find(1);
//        dump($ticket->tickets->toArray());

//        $ticket = Tickets::find(1);
//        dump($ticket->ticketsCategories->toArray());

//        $ticket = TicketsCategories::all('tickets_id')->where('categories_id', '=', 1)->toArray();
//        dump($result = Tickets::all()->where('id', '=', $ticket[0]['tickets_id']));
//        $result = Tickets::all()->where($ticket)

//        $ticket = Tickets::find(1)->categories->where('name', '=', 'Срочно')->toArray();
//        $category = Categories::find(2);
//
//        dump($category->tickets->toArray());
    }


    /**
     * Методы изменения
     */


    /**
     * Методы удаления
     */
}
