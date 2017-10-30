<?php

namespace App\Http\Controllers\tickets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $listCategories = CategoriesController::getCategories();

//        $test = new TestController();
//        $test->insertTicket();

        $testSelect = new TestController();
        $testSelect->selectTicketCategory();

        return view('add_ticket', compact('listCategories'))->render();
    }

    public function sendData()
    {}
}
