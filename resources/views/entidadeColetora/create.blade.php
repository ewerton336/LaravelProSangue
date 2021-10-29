@extends('master')
@section('titulo', 'Criar')
@section('corpo')
    <h3>Entidades Coletoras</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/entidadeColetora" method="post">
    @csrf <!-- token de segurança obrigatório -->
        Nome: <input type="text" name="nome"> <br>
        Telefone: <input type="text" name="telefone"> <br>
        Nome do responsável: <input type="text" name="nome_responsavel"> <br>
        <input type="submit" value="Criar">
    </form>
@endsection
