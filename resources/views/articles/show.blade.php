@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
        <h1>{{ $article->title }}</h1>
        <hr/>
        <article>
            {{ $article->body }}
        </article>
        </div>
    </div>
@endsection