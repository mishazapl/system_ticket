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


        return view('categories_page', compact('categoriesList', 'ticketStatusAll'));

    }
}
