@extends("layouts.app")
@section("content")
<div class="container">
    <div class="card mb-2">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <div class="card-subtitle mb-2 text-muted small">
                {{ $article->created_at->diffForHumans() }}
                category: <b>{{ $article->category->name }}</b>
            </div>
            <p class="card-text">{{ $article->body }}</p>
            <a class="btn btn-warning" href="{{ url("/articles/delete/$article->id") }}">
                Delete
            </a>
        </div>
    </div>
    <ul class="list-group">
        @if(is_countable($article->comments)){
        <li class="list-group-item active">
            <b>Comments ({{ count($article->comments) }})</b>
        </li>
        } @endif
        @foreach((array) $article->comments as $comment)
        <li class="list-group-item">
            {{ $comment->content }}
        </li>
        @endforeach
    </ul>
</div>
@endsection
