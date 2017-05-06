<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Campaignerleadertype extends Model
{
    //
    public function campaignerleader(){
        return $this->hasMany('YoungLife\Campaignerleader');
    }
}
