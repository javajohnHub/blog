@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
           <h1>Write New Article</h1>

            {!! Form::open(['url' => 'articles']) !!}
                <div class="form-group">

                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}

                </div>

            <div class="form-group">

                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

            </div>
            <div class="form-group">

                {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}

            </div>


            {!! Form::close() !!}
        </div>
    </div>
@endsection