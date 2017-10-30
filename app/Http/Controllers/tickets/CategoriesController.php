<?php

namespace App\Http\Controllers\tickets;

use App\tickets\model\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public static function getCategories()
    {
        $categories = Categories::all('categories')->toArray();

        dump(\Illuminate\Support\Facades\Auth::id());

        return $categories;
    }
}
