@extends('welcome')
@section('title')
	Editar Post {{ $post->title }}
@endsection
@section('content')
<div class="row">
	<header class="panel panel-default">
		<div class="panel panel-heading">
			<h1 class="text-center">Novo Post</h1>
		</div>
	</header>
	<div class="col-md-offset-1 col-lg-10 col-md-offset-1">
			{!! Form::model( $post, [ 'route'=>[ 'admin.update',$post->id ] , 'method'=>'put' ] ) !!}
					@include( 'admin.post.form' )
			{!! Form::close()!!}
	</div>
</div>
@endsection
