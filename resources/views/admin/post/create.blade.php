@extends('welcome')
@section('title')
	novo Post
@endsection
@section('content')
<div class="row">
	<header class="panel panel-default">
		<div class="panel panel-heading">
			<h1 class="text-center">Novo Post</h1>
		</div>
	</header>
	<div class="col-md-offset-1 col-lg-10 col-md-offset-1">
			@if ( $errors->any() )
				<ul class="alert-danger">
						@foreach ( $errors->all() as $error )
							<li>{{ $error }}</li>
						@endforeach
				</ul>
			@endif
			{!! Form::open( [ 'route'=>'admin.store', 'method'=>'post' ] ) !!}
					@include( 'admin.post.form' )
			{!! Form::close()!!}
	</div>
</div>
@endsection
