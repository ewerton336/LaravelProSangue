@extends('master')
@section('titulo','EntidadeColetora')
@section('corpo')


<div class="container"
<h3>Entidade Coletora</h3>
<h4> Tem certeza que deseja excluir? </h4>
<dl>

	<dt>Nome</dt>
	<dd>{{$e->nome}}</dd>

	<dt>Telefone</dt>
	<dd>{{$e->telefone}}</dd>

	<dt>Responsavel</dt>
	<dd>{{$e->nome_responsavel}}</dd>

	<form action="/entidadeColetora/{{$e->id}}" method="post">
		@csrf
		@method('DELETE')
		<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
		<a href="/entidadeColetora" class="btn btn-primary btn-sm">Voltar</a>
	</form>
    
</dl>



@endsection