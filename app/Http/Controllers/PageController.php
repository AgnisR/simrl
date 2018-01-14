<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function leagues(){
        return view('leagues');
    }
}
