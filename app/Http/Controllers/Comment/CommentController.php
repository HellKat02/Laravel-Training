<?php

namespace App\Http\Controllers\Comment;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function create() {
        $comment = new Comment;
        $comment->content = request()->content;
        $comment->article_id = request()->article_id;
        $comment->save();

        return back();
    }
    public function delete($id) {
        $comment = Comment::find($id);
        $comment->delete();

        return back();
    }
}
