<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\articles;

class SimController extends Controller
{
    public function LFS(){
        $sim="Live for Speed";
        return view('sim')->with('sim', $sim);
    }
        public function RaceRoom(){
        $sim="RaceRoom";
        return view('sim')->with('sim', $sim);
    }
}
