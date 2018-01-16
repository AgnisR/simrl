<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class simulators extends Model
{
    public function leagues(){
        return $this->hasMany( 'App\leagues', 'sim');   
    }
}
