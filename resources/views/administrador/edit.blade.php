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
                        <label for="tipo_admin">Tipo de Administrador</label>
                        <input type="text" name="tipo_admin" id="tipo_admin" class="form-control"
                               value="{{(empty(old('tipo_admin')))?$dep->tipo_admin:old('tipo_admin')}}"/>
                        @if($errors->has('tipo_admin'))
                            <p class="text-danger">{{$errors->first('tipo_admin')}}</p>
                        @endif
                    </div>
                    <input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
                    <a href="/administrador" class="btn btn-primary btn-sm">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
