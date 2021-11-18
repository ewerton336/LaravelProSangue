@extends('master')
@section('titulo','Admin X Evento')
@section('corpo')


<div class="container"
<h3>Administrador X Evento</h3>
<h4> Tem certeza que deseja excluir essa relação?? </h4>
<dl>

	<dt>Evento</dt>
	<dd>{{$evento->nome_evento}}</dd>

	<dt>Administrador</dt>
	<dd>{{$administrador->nome}}</dd>


	<form action="/adminEvento/{{$e->id}}" method="post">
		@csrf
		@method('DELETE')
		<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
		<a href="/adminEvento" class="btn btn-primary btn-sm">Voltar</a>
	</form>
    
</dl>
@endsection