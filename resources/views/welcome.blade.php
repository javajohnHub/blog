@extends('layout.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home Page</div>

					<div class="panel-body">
						<blockquote>
							<p>{{ Inspiring::quote() }}</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection
