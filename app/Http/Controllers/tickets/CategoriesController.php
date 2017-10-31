<?php

namespace App\Http\Controllers\tickets;

use App\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public static function getCategories()
    {
        $categories = Categories::all('id','name')->toArray();

        return $categories;
    }
}
