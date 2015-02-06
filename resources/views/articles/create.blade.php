@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Write New Articles</h2>
                    </div>
                    <div class="panel-body">

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
    </div>
    </div>
    </div>
@endsection