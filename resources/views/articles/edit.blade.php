@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Edit: {!! $article->title !!}</h2>
                    </div>
                    <div class="panel-body">

                        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
                        <div class="form-group">

                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label('body', 'Body:') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                        </div>
                        <div class="form-group">

                            {!! Form::label('published_at', 'Publish On:') !!}
                            {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

                        </div>
                        <div class="form-group">

                            {!! Form::submit('Update Article', ['class' => 'btn btn-primary form-control']) !!}

                        </div>



                        {!! Form::close() !!}
                        @if   ($errors->any())
                            <ul class="alert alert-danger text-center">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection