<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model;

class Campaignerleader extends Model
{
    //
    public function campaigner(){
        return $this->belongsTo('YoungLife\Campaigner');
    }
    public function campaignerleadertype(){
        return $this->belongsTo('YoungLife\Campaignerleadertype');
    }
    public function user(){
        return $this->belongsTo('YoungLife\User');
    }
}
