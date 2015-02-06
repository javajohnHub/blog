@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
        <h1>Articles</h1>
        <hr/>
        @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ url('/articles', $article->id) }}">
                    {{ $article->title }}</a>
            </h2>
            <div class="body">{{ $article->body }}</div>
        </article>

    @endforeach
    </div>
    </div>
@endsection