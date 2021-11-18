@extends('master')
@section('titulo','Editar Admin X Evento')
@section('corpo')
    <div class="container">
        <h3>Editar Editar Admin X Evento</h3>
        <div class="row">
            <div class="col-sm-6">
                <form action="/adminEvento/{{$dep->id}}" method="post">
                @csrf  <!-- token de segurança -->
                    @method('PUT')
                    <div class="form-group">
                    <h5> Administrador </h5>
    <select class="form-control" id="id_admin" name="id_admin">
    <option value="{{ $admin->id }}">{{$admin->nome}}</option>
    @foreach($admins as $a)
    <option value="{{ $a->id }}">{{$a->nome}}</option>
    @endforeach
  </select>
<br>
<h5> Evento </h5>
  <select class="form-control" id="id_evento" name="id_evento">
  <option value="{{ $evento->id }}">{{$evento->nome_evento}}</option>
    @foreach($eventos as $e)
    <option value="{{ $e->id }}">{{$e->nome_evento}}</option>
    @endforeach
  </select>
  <br>
                    <input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
                    <a href="/adminEvento" class="btn btn-primary btn-sm">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
