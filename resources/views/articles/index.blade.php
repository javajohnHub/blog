@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Articles</h2>
                        </div>
                    <div class="panel-body">
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
         </div>
    </div>
    </div>
@endsection