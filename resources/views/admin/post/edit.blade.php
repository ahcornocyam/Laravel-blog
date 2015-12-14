@extends('welcome')
@section('title')
	Editar Post {{ $post->title }}
@endsection
@section('content')
<div class="row">
	<header class="panel panel-default">
		<div class="panel panel-heading">
			<h1 class="text-center">Editar Post {{ $post->title }}</h1>
		</div>
	</header>
	<div class="col-md-offset-1 col-lg-10 col-md-offset-1">
			{!! Form::model( $post, [ 'route'=>[ 'admin.update',$post->id ] , 'method'=>'put' ] ) !!}
					@include( 'admin.post.form' )
					<div class="form-group">
						{!! Form::label( 'tags', 'Tags:',['class'=> 'form-control-label'] ) !!}
						{!! Form::text( 'tags', $post->TagsList, [ 'class'=> 'form-control' ] ) !!}
					</div>
					<div class="form-group-lg">
					    {!! Form::submit( 'Salvar Edição',[ 'class'=>'btn btn-lg btn-primary' ] ) !!}
					    <a href="{{ route('admin') }}" class="btn btn-lg btn-default">Voltar</a>
					</div>
			{!! Form::close()!!}
	</div>
</div>
@endsection
