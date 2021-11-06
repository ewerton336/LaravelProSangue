@extends('master')
@section('titulo','CalendarioEvento')
@section('corpo')


<div class="container"
<h3>Calendario de eventos</h3>
<h4> Tem certeza que deseja excluir? </h4>
<dl>

	<dt>Nome</dt>
	<dd>{{$e->nome_evento}}</dd>

	<dt>Data</dt>
	<dd>{{$e->dt_evento}}</dd>


	<form action="/calendarioEvento/{{$e->id}}" method="post">
		@csrf
		@method('DELETE')
		<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
		<a href="/calendarioEvento" class="btn btn-primary btn-sm">Voltar</a>
	</form>
    
</dl>



@endsection