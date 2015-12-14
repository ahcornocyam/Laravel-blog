<div class="form-group">
  {!! Form::label( 'title', 'Título' ) !!}
	{!! Form::text( 'title', null, [ 'class'=> 'form-control' ] ) !!}
</div>
<div class="form-group">
  {!! Form::label( 'content', 'Conteúdo' ) !!}
	{!! Form::textarea( 'content', null, [ 'class'=> 'form-control' ] ) !!}
</div>
<div class="form-group-lg">
    {!! Form::submit( 'Salvar',[ 'class'=>'btn btn-lg btn-primary' ] ) !!}
    <a href="{{ route('admin') }}" class="btn btn-lg btn-default">Voltar</a>
</div>
