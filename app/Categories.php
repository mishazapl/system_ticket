<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public $timestamps = false;

    public function tickets()
    {
        return $this->belongsToMany('App\Tickets', 'categories_tickets', 'category_id', 'ticket_id');
    }
}
