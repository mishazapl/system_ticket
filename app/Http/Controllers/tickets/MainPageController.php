<?php

namespace App\Http\Controllers\tickets;

use App\Categories;

use App\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainPageController extends Controller
{
    public function show()
    {
        $categoriesList = Categories::all();

        $ticketStatusAll = Status::all();

        foreach ($ticketStatusAll as $ticketStatus) {
            dump($ticketStatus->tickets);
        }

        return view('welcome', compact('categoriesList'));
    }
}
