<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
