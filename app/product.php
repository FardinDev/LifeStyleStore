<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function cats(){

        return $this->belongsToMany("App\cat");
    
    }
}
