<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
//    use SoftDeletesDeletes;
    public  function item(){
        return $this->hasMany('App/item');
    }
}
