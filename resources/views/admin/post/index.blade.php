@extends('welcome')
	@section('title')
		Area Administrativa do Blog
	@endsection
	@section('content')
		<div class="row">
		  <header class="panel panel-default">
		  	<div class="panel panel-heading">
		  		<h1 class="text-center">Area Administrativa</h1>
		  	</div>
		  </header>
			<div class="col-md-offset-1 col-lg-10 col-md-offset-1">
					<a href="{{ route('admin.create') }}"> novo post</a>
					<table class="table table-responsive table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Título</th>
								<th>Data</th>
								<th>Ação</th>
							</tr>
						</thead>
						@foreach ( $posts as $post )
						<tbody class="">
							<tr>
								<td>{{ $post->id }}</td>
								<td>{{ $post->title }}</td>
								<td>{{ $post->created_at }}</td>
								<td><a href="{{ route( 'admin.edit',[ 'id' => $post->id ] ) }}" alt="editar"><i class="glyphicon glyphicon-edit"></i></a> |
								<a href="{{ route( 'admin.delete', [ 'id' => $post->id ] ) }}" alt="excluir"><i class="glyphicon glyphicon-remove"></a></td>
							</tr>
						</tbody>
						@endforeach
						<tfoot>
							<tr>
								<td colspan="4">
									<div class="text-center">
											{!! $posts->render() !!}
									</div>
									<p class="text-center">
										<small>foram registrados <b>{{ $post->count() }}</b> postagens </small>
									</p>
								</td>
							</tr>
						</tfoot>
					</table>
			</div>
		</div>
@stop
