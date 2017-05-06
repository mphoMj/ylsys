<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    public function usertype(){
    	return $this->belongsToMany(Usertype::class);
    }
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
