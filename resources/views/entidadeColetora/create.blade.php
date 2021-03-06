@extends('master')
@section('titulo', 'Criar')
@section('corpo')
    <h3>Nova Entidade Coletora</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/entidadeColetora" method="post">
    @csrf <!-- token de segurança obrigatório -->
        Nome: <input type="text" name="nome"> <br>
        Telefone: <input type="text" name="telefone"> <br>
        Nome do responsável: <input type="text" name="nome_responsavel"> <br>
        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
        <a href="/administrador/" class="btn btn-primary btn-sm">Voltar</a>
    </form>
@endsection
