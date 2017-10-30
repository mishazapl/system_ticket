<?php

namespace App\tickets\model;

use Illuminate\Database\Eloquent\Model;

class NewTickets extends Model
{
    protected $table = 'new_tickets';

    public function ticketPhotos()
    {
        return $this->hasMany('App\tickets\model\TicketPhoto');
    }

    public function ticketCategories()
    {
        return $this->hasMany('App\tickets\model\TicketCategories');
    }
}
