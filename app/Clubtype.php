<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Clubtype extends Model
{
    //
    public function club()
    {
        return $this->hasMany('YoungLife\Club');
    }
}
