<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserSubscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('user_id', Auth::id())->get();

        return view('user.articles.index', [
            'articles' => $articles,
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.articles.create', [
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        //return $request;
        //$request->validated();
        $article = Article::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'article_body' => $request->article_body,
            'slug' => Str::slug($request->title)
        ]);

        $article->addMediaFromRequest('thumbnail')->toMediaCollection('images');
        return redirect()->route('user.article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //$article = Article::find($article->id);
        //$thumbnail = $article->getFirstMediaUrl('images');

        //return view('user.articles.show', compact('article', 'thumbnail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('user.articles.edit',[
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $request->validated();

        $article->update([
            'title' => $request->title,
            'article_body' => $request->article_body
        ]);

        if ($request->hasFile('thumbnail')) {
            $article->clearMediaCollection('images');
            $article->addMediaFromRequest('thumbnail')->toMediaCollection('images');
        }

        return redirect()->route('user.article.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        $article->clearMediaCollection('images');

        return redirect()->route("user.article.index")->with("success", "Article berhasil dihapus");
    }
}
