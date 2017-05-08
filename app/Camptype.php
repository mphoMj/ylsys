<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Camptype extends Model
{
    //
    public function camp(){
    	return $this->hasMany(Camp::class);
    }
}
