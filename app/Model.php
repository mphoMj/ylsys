<?php

namespace YoungLife;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{

    //option 1- in each model>>protected $fillable = ['firstname','lastname','nickname', 'gender', 'dateofbirth']; >>//this allows the listed fields to be accepted


    //option 2- in each model >>protected $guarded = ['user_id']; >> filters out the listed items
    //option 3- in each model>> protected $guarded = ['']; >> guards against nothing
    //option 4 >>>below >>requires that all guards get specified in here
    //notice the *as Eloquent thus all occurences of extending the eloquent get removed as we are extending our own model
    protected $guarded = ['user_id'];

}