<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Datesmet extends Model
{
    //
    public function recruitment(){
        return $this->belongsTo('YoungLife\Recruitment');
    }
    public function user(){
        return $this->belongsTo('YoungLife\User','loggedby');
    }
}
