<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    public function team(){
    	return $this->hasMany('YoungLife\Team');

    }
}
