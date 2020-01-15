<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Pages
Route::get('/', 'ArticlesController@index');
Route::get('/articles', 'ArticlesController@index');
Route::get('/about', function () {
    return view('about');
});

// Articles
Route::get('articles/{article}', 'ArticlesController@show');
