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

    }

    // Persist the new resource
    public function store() {

    }

    // Shows a view to edit an existing resource
    public function edit() {

    }

    // Persist the edited resource
    public function update() {

    }

    // Delete an existing resource
    public function destroy() {

    }
}
