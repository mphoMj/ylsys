<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Campaignerstatistic extends Model
{
    //
    public function campaigner(){
    	return $this->belongsTo('YoungLife\Campaigner');
    }
    public function campaignerleader_statistic(){
        return $this->hasMany('YoungLife\Campaignerleader_Statistic');
    }

}
