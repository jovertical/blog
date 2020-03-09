<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the Article.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::orderByDesc('published_at')->limit(10)->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * Display the specified Article.
     *
     * @return \Illuminate\View\View
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
