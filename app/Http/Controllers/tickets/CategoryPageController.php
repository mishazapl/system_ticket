<?php

namespace App\Http\Controllers\tickets;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Status;
use App\Tickets;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{


    public function show()
    {
        $categoriesList = Categories::all()->where('slug', '=', request('slug'));

        $ticketStatusAll = Status::all();



//        foreach ($categoriesList as $category) {
//            dump($category->status);
//
////            foreach ($category->tickets->sortByDesc('created_at') as $ticketStatus) {
////
////                dump($ticketStatus->theme);
////
////                foreach ($ticketStatus->status->sortBy('id') as $ticket) {
////                    dump($ticket->name);
////                }
////
////            }
//
//        }

        return view('categories_page', compact('categoriesList', 'ticketStatusAll'));

    }
}
