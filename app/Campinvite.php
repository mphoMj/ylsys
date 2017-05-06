<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Campinvite extends Model
{
    //
    public function campfeecontribution(){
        return $this->hasMany('YoungLife\Campfeecontribution');
    }
    public function user(){
        return $this->hasMany(User::class,'loggedby');
    }
}
