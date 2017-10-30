<?php

namespace App\tickets\model;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = 'tickets';

    public function ticketPhotos()
    {
        return $this->hasMany('App\tickets\model\TicketPhoto');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function ticketCategory()
    {
        return $this->belongsToMany('App\tickets\model\Categories', 'categories', 'ticket_id', 'id');

//        return $this->belongsToMany(Categories::class);
    }
}
