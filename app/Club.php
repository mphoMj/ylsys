<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    public function clubtype(){
        return $this->belongTo(Clubtype::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
    public function clubleader(){
        return $this->hasMany(Clubleaders::class);
    }
}
