<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Campcommitment extends Model
{
    //
    public function campattendee(){
        return $this->belongsTo('YoungLife\Campattendee');
    }
    public function user(){
        //who entered the record
        return $this->belongsTo('YoungLife\User','loggedby');
    }
}
