<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = 'tickets';

    public function ticketPhotos()
    {
        return $this->hasMany('App\TicketPhoto');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Categories', 'categories_tickets', 'ticket_id', 'category_id');
    }

//    public function ticketCategory()
//    {
//        return $this->belongsToMany('App\tickets\model\Categories', 'categories', 'ticket_id', 'id');
//
////        return $this->belongsToMany(Categories::class);
//    }
}
