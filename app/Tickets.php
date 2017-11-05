<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = 'tickets';

    protected $fillable =
        [
          'user_id',
          'theme',
          'message',
          'status'
        ];

    public function ticketsPhoto()
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

    public function status()
    {
        return $this->belongsToMany('App\Status', 'tickets_status', 'ticket_id', 'status_id');
    }

}
