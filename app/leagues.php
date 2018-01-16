<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leagues extends Model
{
    public function simulator(){
        return $this->belongsTo( 'App\simulator');   
    }
    public function User(){
        return $this->belongsTo( 'App\User', 'organizer');   
    }

}
