<?php

namespace App\tickets\model;

use Illuminate\Database\Eloquent\Model;

class TicketCategories extends Model
{
    protected $table = 'new_tickets';

    public function categoriesLists()
    {
        return $this->hasMany('App\tickets\model\CategoriesLists');
    }
}
