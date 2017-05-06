<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class ClubleaderAttendance extends Model
{
    //
    public function clubleader(){
        return $this->belongsTo('YoungLife\Clubleader');
    }
    public function clubstatistics(){
        return $this->belongsTo('YoungLife\Clubstatistics');
    }
}
