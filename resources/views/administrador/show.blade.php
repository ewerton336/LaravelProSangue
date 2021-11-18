@extends('master')
@section('titulo','Administrador')
@section('corpo')


<div class="container"
<h3>Administrador</h3>
<h4> Tem certeza que deseja excluir? </h4>
<dl>

	<dt>Nome</dt>
	<dd>{{$e->nome}}</dd>

	<dt>Tipo de Administrador</dt>
	<dd>{{$e->tipo_admin}}</dd>


	<form action="/administrador/{{$e->id}}" method="post">
		@csrf
		@method('DELETE')
		<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
		<a href="/administrador" class="btn btn-primary btn-sm">Voltar</a>
	</form>
    
</dl>
@endsection