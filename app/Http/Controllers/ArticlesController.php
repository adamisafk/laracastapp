<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\Request;


class ArticlesController extends Controller
{
    // Show a list of resources
    public function index() {
        $articles = Article::paginate(5);

        return view(Request::route()->getName(), [
            'articles' => $articles
        ]);
    }

    // Show an individual resource
    public function show(Article $article) {
        return view('articles.show', ['article' => $article]);
    }

    // Shows a view to create a new resource
    public function create() {
        return view('articles.create');
    }

    // Persist the new resource
    public function store() {
        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    // Shows a view to edit an existing resource
    public function edit(Article $article) {
        return view('articles.edit', compact('article'));
    }

    // Persist the edited resource
    public function update(Article $article) {
        $article->update($this->validateArticle());

        return redirect(route('articles.show', $article));
    }

    // Delete an existing resource
    public function destroy() {

    }





    // Helper Methods


    /**
     * @return array
     */
    public function validateArticle()
    {
        return request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
