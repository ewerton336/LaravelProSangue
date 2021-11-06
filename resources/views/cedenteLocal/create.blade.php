@extends('master')
@section('titulo', 'Criar')
@section('corpo')
    <h3>Novo Cedente Local</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/cedenteLocal" method="post">
    @csrf <!-- token de segurança obrigatório -->
        Nome: <input type="text" name="nome"> <br>
        Telefone: <input type="text" name="telefone"> <br>
        Endereço: <input type="text" name="endereco"> <br>
        Responsavel: <input type="text" name="responsavel"> <br>

        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
        <a href="/administrador/" class="btn btn-primary btn-sm">Voltar</a>
    </form>
@endsection
