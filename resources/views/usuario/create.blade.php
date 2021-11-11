@extends('master')
@section('titulo', 'Criar')
@section('corpo')
    <h3>Novo Doador</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/usuario" method="post">
    @csrf <!-- token de segurança obrigatório -->
        Login: <input type="text" name="login"> <br>
        Email: <input type="email" name="email"> <br>
        Senha: <input type="password" name="senha"> <br>
        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
        <a href="/usuario/" class="btn btn-primary btn-sm">Voltar</a>
    </form>
@endsection
