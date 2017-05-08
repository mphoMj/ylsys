<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    //
    public function adolescent(){
        return $this->belongsTo('YoungLife\Adolescent');
    }
    public function user(){
        return $this->belongsTo('YoungLife\User','leader_id');
    }
}
