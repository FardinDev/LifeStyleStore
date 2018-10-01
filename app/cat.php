<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    public function products(){

        return $this->belongsToMany("App\product");
    
    }
}
