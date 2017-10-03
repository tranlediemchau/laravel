<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typemarchandise extends Model
{
    //
    public  function  products(){
        return $this->hasMany('App\Product');
    }
}
