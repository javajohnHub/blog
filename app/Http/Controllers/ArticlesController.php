<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;

class ArticlesController extends Controller {



    public function index()
    {
        $articles = Article::all();

        return view('articles/index', compact('articles'));

    }

    public function show($id){

        $article = Article::findOrfail($id);


        return view('articles/show',compact('article'));
    }

}