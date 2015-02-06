@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>About</h2>
                        @if (count($people))
                        <h3>People I like:</h3></div>
                        <div class="panel-body">
                        <ul>
                            @foreach($people as $person)
                                <li>{{ $person }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection