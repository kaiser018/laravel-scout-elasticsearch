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
use App\Articles\ArticlesRepository;

Route::get('/', function () {
    return view('posts.index', [
        'posts' => App\Post::all(),
    ]);
});

Route::get('/search', function () {
    $posts = App\Post::search(request('q'))->get();

    return view('posts.index', [
        'posts' => $posts,
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
