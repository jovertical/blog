<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('published_at')->limit(10)->get();

        return view('articles.index', compact('articles'));
    }
}
