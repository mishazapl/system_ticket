<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesTickets extends Model
{
    protected $table = 'categories_tickets';

    public $timestamps = false;

    protected $fillable =
        [
            'ticket_id',
            'category_id'
        ];

}
