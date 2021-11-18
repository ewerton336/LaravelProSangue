@extends('master')
@section('titulo', 'Criar')
@section('corpo')
    <h3>Novo Administrador</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/administrador" method="post">
    @csrf <!-- token de segurança obrigatório -->
    <h5> Nome: </h5> 
    <input type="text" name="nome"> <br>
        <h5> Tipo de Admministrador: </h5>
    <select class="form-control" id="tipo_admin" name="tipo_admin">
    <option value="Administrador de Evento">Administrador de Evento</option>
    <option value="Administrador de Usuário">Administrador de Usuário</option>
    <option value="Administrador de Doador">Administrador de Doador</option>
    <option value="Administrador de Cedente Local">Administrador de Cedente Local</option>
  </select>
  <br>
        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
        <a href="/administrador/" class="btn btn-primary btn-sm">Voltar</a>
    </form>
@endsection
