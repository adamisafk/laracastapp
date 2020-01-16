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
Route::get('/', 'ArticlesController@index')->name('welcome');
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/about', function () {
    return view('about');
});

Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
Route::post('/articles', 'ArticlesController@store');
Route::get('articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'ArticlesController@update');
