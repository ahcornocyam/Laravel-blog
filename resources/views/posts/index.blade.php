@extends( 'welcome' ) @section( 'title' ) Blog @endsection @section(
'content' )
<div class="row">
	<div class="col-md-9">
		<header>
			<h1>Blog --- Archors ----</h1>
		</header


		<hr>
		@foreach( $posts as $post )
		<article class="panel panel-default">
			<header class="panel-heading">
				<h1>
					<a href="{{ route( 'blog.post',['id'=> $post->id] ) }}">{{$post->title}}</a>
				</h1>
				<small>{{$post->created_at}}</small>
			</header>
			<section class="panel-body">
				<p>{{$post->content}}</p>
			</section>
			<footer class="panel-footer">
				<p class="text-right">
					<small>
					<b>tags :</b>
					@foreach( $post->tags as $tag )
						 <a href="{{ route( 'blog' )}}">{{$tag->name }}</a>,
					@endforeach
				</small>
				</p>
			</footer>
		</article>
		<hr>
		@endforeach
	</div>
	<div class="col-md-3">
		@include('posts.links')		
	</div>

</div>
@stop
