<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class item extends Model
{
//    use SoftDeletesDeletes;
    public  function category(){
        return $this->belongsTo('App/category',"category_id");
    }
}
