@extends( 'welcome' ) @section( 'title' ) Post -{{$post->title}}
@endsection @section( 'content' )
<div class="row">
	<div class="col-md-9 panel panel-primary">
		<header class="panel-heading">
			<h1 class="text-center">{{$post->title}}</h1>
		</header>
		<article>
			<section class="text-justify panel-body">{{$post->content}}</section>
			<section class="pull-right">
				<a href="{{ route('blog') }}" class="btn btn-link">voltar</a>
			</section>
			<section>
				<header>
					<h3>Comente</h3>
				</header>
				<section>@include('posts.formComments')</section>
			</section>
			<section>
				<header>
					<h1>Comentários</h1>
				</header>
				@foreach( $post->comments as $comment )
				<article class="panel panel-default">
					<span class="panel-heading">nome: {{$comment->name}} <small>({{$comment->created_at}})</small></span>
					<div class="panel-body">
						<p>{{$comment->comment}}</p>
					</div>

				</article>
				@endforeach
			</section>
		</article>

	</div>
	<div class="col-md-3">@include( 'posts.links' )</div>
</div>
@stop
