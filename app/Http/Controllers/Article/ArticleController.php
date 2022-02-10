<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Models\Article as Article;

class ArticleController extends Controller
{
    public function index() {
        $data = Article::all();
        return view('articles.index', [
            'articles' => $data
        ]);
    }
    public function detail($id) {
        return "Controller - Article Detail - $id";
    }
}
