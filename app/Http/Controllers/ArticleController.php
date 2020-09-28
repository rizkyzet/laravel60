<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {

        $articles = Article::latest()->paginate(9);
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $attr = request()->validate([
            'title' => ['required', 'min:3', 'max:100'],
            'content' => ['required', 'min:3'],
        ]);

        $attr['slug'] = Str::slug(request('title') . '-' . Str::random(32));


        $article = Auth::user()->articles()->create($attr);


        return redirect()->route('articles.show', $article);
    }
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {

        // if ($article->user->id !== Auth::id()) {
        //     abort(404);
        // };

        $this->authorize('update', $article);

        $attr = request()->validate([
            'title' => ['required', 'min:3', 'max:100'],
            'content' => ['required', 'min:3'],
        ]);

        $attr['slug'] = Str::slug(request('title') . '-' . Str::random(32));



        $article->update($attr);

        return redirect()->route('articles.show', $article);
    }

    public function destroy(Article $article)
    {

        $this->authorize('update', $article);
        $article->delete();

        return redirect()->route('articles.index');
    }
}
