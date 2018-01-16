<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\leagues;
use App\simulators;


class LeagueController extends Controller
{
    public function league($id){
        $league = leagues::find($id);
        $sim = simulators::all();
        return view ('oneleague')->with('league', $league)->with('sim', $sim);
    }
    public function myleagues(){
        return view ('myleagues');
    }
}
