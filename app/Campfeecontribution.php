<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class CampFeeContribution extends Model
{
    //
    public function campinvite(){
        return $this->belongsTo('YoungLife\Campinvite');
    }
    public function user(){
        return $this->belongsTo(User::class,'loggedby');
    }
}
