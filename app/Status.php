<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    public $timestamps = false;

    public function tickets()
    {
        return $this->belongsToMany('App\Tickets', 'tickets_status', 'status_id', 'ticket_id');
    }

    public function categories()
    {
        $this->belongsTo('App\Categories');
    }
}
