<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\Request;


class ArticlesController extends Controller
{
    // Show a list of resources
    public function index() {
        $articles = Article::paginate(5);
        $view = '';

        if (Request::is('/')) {
            $view = 'welcome';
        } elseif (Request::is('articles')) {
            $view = 'articles.index';
        } else {
            abort(404);
        }

        return view($view, [
            'articles' => $articles
        ]);
    }

    // Show an individual resource
    public function show($id) {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    // Shows a view to create a new resource
    public function create() {
        return view('articles.create');
    }

    // Persist the new resource
    public function store() {
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles');
    }

    // Shows a view to edit an existing resource
    public function edit($id) {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    // Persist the edited resource
    public function update($id) {
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    // Delete an existing resource
    public function destroy() {

    }
}
