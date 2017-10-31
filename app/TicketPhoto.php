<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketPhoto extends Model
{
    protected $table = 'ticket_photo';

    public $timestamps = false;

    public function tickets()
    {
        return $this->belongsTo('App\Tickets');
    }
}
