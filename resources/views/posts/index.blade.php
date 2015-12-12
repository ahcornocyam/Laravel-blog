@extends( 'welcome' )
	@section( 'title' )
		Blog
	@endsection
	@section( 'content' )
		<div class="row">
			<div class="col-md-9">
				<header>
			<h1>Blog --- Archors ---- </h1>
		</header
		<hr>
		@foreach( $posts as $post )
			<article class="panel panel-default">
				<header class="panel-heading">
					<h1><a href="{{ route( 'blog.post',['id'=> $post->id] ) }}">{{$post->title}}</a></h1><small>{{$post->created_at}}</small>
				</header>				
				<section class="panel-body">
					<p>
						{{$post->content}}
					</p>
				</section>
			</article>
			<hr>			
		@endforeach		
			</div>
			<div class="col-md-3">
				<aside class="panel panel-default">
			<header>
				<h1>Links</h1>
			</header>
			<nav>
				<ul class="nav nav-pills nav-stacked" >
					@foreach( $posts as $link )
						<li><a href="{{ route( 'blog.post',['id'=> $link->id] ) }}">{{$link->title}}</a></li>
					@endforeach
				</ul>
			</nav>
		</aside>
			</div>
		</div>
@stop
