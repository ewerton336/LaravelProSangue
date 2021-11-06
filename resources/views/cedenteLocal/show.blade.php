@extends('master')
@section('titulo','cedenteLocal')
@section('corpo')


<div class="container"
<h3>Cedente do Local</h3>
<h4> Tem certeza que deseja excluir? </h4>
<dl>

	<dt>Nome</dt>
	<dd>{{$e->nome_evento}}</dd>

	<dt>endereco</dt>
	<dd>{{$e->endereco}}</dd>


	<form action="/cedenteLocal/{{$e->id}}" method="post">
		@csrf
		@method('DELETE')
		<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
		<a href="/cedenteLocal" class="btn btn-primary btn-sm">Voltar</a>
	</form>
    
</dl>



@endsection