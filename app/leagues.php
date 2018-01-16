<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leagues extends Model
{
    public function simulators(){
        return $this->belongsTo( 'App\simulators', 'name');   
    }
    public function User(){
        return $this->belongsTo( 'App\User', 'organizer');   
    }

}
