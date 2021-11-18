@extends('master')
@section('titulo', 'Criar')
@section('corpo')
    <h3>Novo Administrador</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/administrador" method="post">
    @csrf <!-- token de segurança obrigatório -->
        Nome: <input type="text" name="nome"> <br>
        Evento: <input type="text" name="id_evento"> <br>
        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
        <a href="/administrador/" class="btn btn-primary btn-sm">Voltar</a>
    </form>
@endsection
