<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Campaigner extends Model
{
    //
    public function campaignerleader(){
    	return $this->hasMany('YoungLife\Campaignerleader');
    }

    public function campaigner_Statistic(){
    	return $this->hasMany('YoungLife\Campaigner_Statistic');
    }
}
