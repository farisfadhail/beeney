<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate();
        $latestArticle = Article::latest()->first();

        return view('pages.articles.index', compact('articles', 'latestArticle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article = Article::find($article->id);
        $user = User::where('id', $article->user_id)->get();
        $thumbnail = $article->getFirstMediaUrl('images');

        $this->increaseWatchCount($article->id);

        return view('pages.articles.show', compact('article', 'user', 'thumbnail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    public function increaseWatchCount($id)
    {
        $article = Article::findOrFail($id);
        $article->watch += 1;
        $article->save();
    }
}
