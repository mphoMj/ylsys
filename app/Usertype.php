<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    //
    public function user(){
        return $this->hasMany('YoungLife\User');
    }
}
