@extends('master')
@section('titulo','Editar Administrador')
@section('corpo')
    <div class="container">
        <h3>Editar Administrador</h3>
        <div class="row">
            <div class="col-sm-6">
                <form action="/administrador/{{$dep->id}}" method="post">
                @csrf  <!-- token de segurança -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control"
                               value="{{(empty(old('nome')))?$dep->nome:old('nome')}}"/>
                        @if($errors->has('nome'))
                            <p class="text-danger">{{$errors->first('nome')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="id_evento">Evento</label>
                        <input type="text" name="id_evento" id="id_evento" class="form-control"
                               value="{{(empty(old('id_evento')))?$dep->id_evento:old('id_evento')}}"/>
                        @if($errors->has('dt_nascimento'))
                            <p class="text-danger">{{$errors->first('id_evento')}}</p>
                        @endif
                    </div>
                    <input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
                    <a href="/administrador" class="btn btn-primary btn-sm">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
