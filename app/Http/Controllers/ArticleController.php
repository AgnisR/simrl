<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id){
        $article=Article::find($id);
        return $article;
    }
}
