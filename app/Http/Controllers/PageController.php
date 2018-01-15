<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\articles;
use App\leagues;

class PageController extends Controller
{
    public function home(){
        $article = articles::all();
        //$article = articles::orderByDesc('created_at');
        //return view('home', ['articles' => $articles]);
        return view('home')->with('article', $article);
    }
    public function leagues(){
        $league = leagues::all();
        return view('leagues')->with('league', $league);
    }
    public function underconstruction(){
        return view('underconstruction');
    }
}
