@extends('welcome')
@section('title')
	notas de {{$nome}}
@endsection
@section('content')
	<header>
		<h1 class="text-center">Olá senhor {{$nome}}</h1>
	</header>
	<article>
		<ul>	
		@foreach( $notas as $nota )
			<li>{{$nota}}</li>
		@endforeach
		</ul>
	</article>
	
	
@stop