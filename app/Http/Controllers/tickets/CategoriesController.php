<?php

namespace App\Http\Controllers\tickets;

use App\tickets\model\CategoriesList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public static function getCategories()
    {
        $categories = CategoriesList::all('categories')->toArray();

        dump(\Illuminate\Support\Facades\Auth::id());

        return $categories;
    }
}
