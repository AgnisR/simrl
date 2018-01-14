<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\articles;

class PageController extends Controller
{
    public function home(){
        $article=articles::orderByDesc('created_at')->first();
        
        return view('home')->with('article', $article);
    }
    public function leagues(){
        return view('leagues');
    }
    public function underconstruction(){
        return view('underconstruction');
    }
}
