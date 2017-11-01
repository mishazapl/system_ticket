<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    public $timestamps = false;

    protected $fillable =
        [
            'user_id',
            'name'
        ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
