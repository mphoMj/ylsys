<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    //
    public function camptype(){
    	return $this->belongsTo('YoungLife\Camptype');
    }
}
