@extends('master')
@section('titulo','Usuario')
@section('corpo')


<div class="container"
<h3>Usuario</h3>
<h4> Tem certeza que deseja excluir? </h4>
<dl>

	<dt>Login</dt>
	<dd>{{$e->login}}</dd>

	<dt>Email</dt>
	<dd>{{$e->email}}</dd>


	<form action="/usuario/{{$e->id}}" method="post">
		@csrf
		@method('DELETE')
		<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
		<a href="/usuario" class="btn btn-primary btn-sm">Voltar</a>
	</form>
    
</dl>
@endsection