<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\leagues;


class LeagueController extends Controller
{
    public function league($id){
        $league = leagues::find($id);
        return view ('oneleague')->with('league', $league);
    }
}
