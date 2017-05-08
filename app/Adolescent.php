<?php

namespace YoungLife;



class Adolescent extends Model
{
    //
    public function recruitment(){
        return $this->hasOne('YoungLife\Recruitment');
    }
}
