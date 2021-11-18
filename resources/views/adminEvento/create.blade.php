@extends('master')
@section('titulo', 'Criar')
@section('corpo')
<div class="container">
    <h3>Nova relação de Evento X Administrador</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/adminEvento" method="post">
    @csrf <!-- token de segurança obrigatório -->

<h5> Administrador </h5>
    <select class="form-control" id="id_admin" name="id_admin">
    @foreach($admins as $a)
    <option value="{{ $a->id }}">{{$a->nome}}</option>
    @endforeach
  </select>
<br>
<h5> Evento </h5>
  <select class="form-control" id="id_evento" name="id_evento">
    @foreach($eventos as $e)
    <option value="{{ $e->id }}">{{$e->nome_evento}}</option>
    @endforeach
  </select>
  <br>
        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
        <a href="/administrador/" class="btn btn-primary btn-sm">Voltar</a>
    </form>

</div>
@endsection
