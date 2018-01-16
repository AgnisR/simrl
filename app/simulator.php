<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class simulator extends Model
{
    public function leagues(){
        return $this->hasMany( 'App\leagues');   
    }
}
