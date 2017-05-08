<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Clubstatistics extends Model
{
    //
    public function club()
    {
        return $this->belongsTo('YoungLife\Club');
    }
    public function clubleaderattendance()
    {
        return $this->hasMany('YoungLife\ClubleaderAttendance');
    }
}
