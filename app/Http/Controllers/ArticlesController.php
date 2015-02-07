<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Carbon\Carbon;

class ArticlesController extends Controller {


    public function index() {

        $articles = Article::latest('published_at')->published()->get();

        return view('articles/index', compact('articles'));

    }

    public function create() {

        return view('articles.create');

    }

    public function store(CreateArticleRequest $request) {

        Article::create($request->all());

        return redirect('articles');

    }

    public function show($id){

        $article = Article::findOrfail($id);

        return view('articles/show',compact('article'));
    }

}