@extends('master')
@section('titulo', 'entidade')
@section('corpo')
    <h3>Doadores:</h3>
    <a href="/entidadeColetora/create">Nova Entidade Coletora</a>
    <br>


    @foreach($varView as $e)

        {{$e->id}} - {{ $e ->nome  }} - {{$e ->telefone}} - {{$e ->nome_responsavel}}
        <a href="/entidade/{{$e->id}}" class="btn btn-primary btn-sm">Detalhe</a>
        <a href="/entidade/{{$e->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
        <br>

    @endforeach
@endsection

