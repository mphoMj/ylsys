<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Campaignerleader_Statistic extends Model
{
    //
    public function campaignerleader(){
        return $this->belongsTo('YoungLife\Campaignerleader');
    }
    public function campaignerstatistic(){
        return $this->belongsTo('YoungLife\Campaignerleader');
    }
}
