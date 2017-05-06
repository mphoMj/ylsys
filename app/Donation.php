<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('YoungLife\User','loggedby');
    }
}
