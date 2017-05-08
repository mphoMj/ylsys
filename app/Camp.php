<?php

namespace YoungLife;



class Camp extends Model
{
    //
    public function camptype(){
    	return $this->belongsTo('YoungLife\Camptype');
    }
}
