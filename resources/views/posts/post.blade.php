@extends( 'welcome' )
	@section( 'title' )
		Post -{{$post->title}}
	@endsection
		
	@section( 'content' )
		<div class="row">
			<div class="col-md-9">
				<header>
					<h1 class="text-center">{{$post->title}}</h1>
				</header>
				<article>
					<section class="text-justify">
						{{$post->content}}
					</section>
					<section class="pull-right">
						<a href="{{ route('blog') }}" class="btn btn-link">voltar</a>
					</section>
					<section>
						<header>
							<h3>Comente</h3>
						</header>
						<section>
							<form>
								<div class="form-group" >
									<input type="text" name="name" placeholder="Informe o seu nome" class="form-control">
								</div>
								<div class="form-group">
									<input type="email" name="email" placeholder="Informe o seu email" class="form-control">
								</div>
								<div class="form-group">
									<textarea rows="5" cols="" placeholder="Comente" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" name="enviar" class="btn btn-primary" class="form-control">enviar</button>
								</div>
							</form>
						</section>
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