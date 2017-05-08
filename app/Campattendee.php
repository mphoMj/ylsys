<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Campattendee extends Model
{
    //
    public function campcommitment(){
        return $this->hasOne('YoungLife\Campcommitment');
    }
    public function campinvite(){
        return $this->belongsTo('YoungLife\Campinvite');
    }
    public function user(){
        return $this->belongsTo('YoungLife\User','loggedby');
    }
}
