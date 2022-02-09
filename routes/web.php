<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Static routes
Route::get('/articles', function () {
    return 'Articles List';
});

Route::get('/articles/detail', function() {
    return 'Aritcle Detail';
}) -> name('article.detail');

// Dynamic routes
Route::get('/articles/detail/{id}', function($id) {
    return "Article Detail - $id";
});

// Named routes
Route::get('/articles/more', function() {
    return redirect() -> route('article.detail');
});