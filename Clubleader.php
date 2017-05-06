<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubleader extends Model
{
    //
    public function clubleaderattendance()
    {
        return $this->hasMany(ClubleaderAttendance::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

}
