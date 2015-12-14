<aside class="panel panel-default">
	<header>
		<h1>Posts</h1>
	</header>
	<nav>
		<ul class="nav nav-pills nav-stacked">
			@foreach( $posts as $link )
			<li><a href="{{ route( 'blog.post',['id'=> $link->id] ) }}">{{$link->title}}</a></li>
			@endforeach
		</ul>
	</nav>
</aside>
