@extends('master')
@section('titulo','Editar Evento')
@section('corpo')
    <div class="container">
        <h3>Editar Cedente Local</h3>
        <div class="row">
            <div class="col-sm-6">
                <form action="/calendarioEvento/{{$dep->id}}" method="post">
                @csrf  <!-- token de segurança -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome_evento">Nome do evento</label>
                        <input type="text" name="nome_evento" id="nome_evento" class="form-control"
                               value="{{(empty(old('nome_evento')))?$dep->nome_evento:old('nome_evento')}}"/>
                        @if($errors->has('nome_evento'))
                            <p class="text-danger">{{$errors->first('nome_evento')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="dt_evento">Data do evento</label>
                        <input type="datetime-local" name="dt_evento" id="dt_evento" class="form-control"
                               value="{{(empty(old('dt_evento')))?$dep->dt_evento:old('dt_evento')}}"/>
                        @if($errors->has('dt_evento'))
                            <p class="text-danger">{{$errors->first('dt_evento')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="local_coleta">Local da Coleta</label>
                        <input type="text" name="local_coleta" id="local_coleta" class="form-control"
                               value="{{(empty(old('local_coleta')))?$dep->local_coleta:old('local_coleta')}}"/>
                        @if($errors->has('local_coleta'))
                            <p class="text-danger">{{$errors->first('local_coleta')}}</p>
                        @endif
                    </div>
                    <div class="container">

                    <div class="form-group">
      <label for="local_coleta">Local do evento:</label>
      <select class="form-control" id="sel1" name="local_coleta">
     <option selected="{{(empty(old('entidade_coletora')))?$dep->entidade_coletora:old('entidade_coletora')}}"> {{(empty(old('entidade_coletora')))?$dep->entidade_coletora:old('entidade_coletora')}}</option>
     @foreach($cedenteLocal as $c)
        <option value="{{ $c->id}}">{{ $c ->endereco  }}</option>
        @endforeach
      </select>

 
 

    <div class="form-group">
      <label for="entidade_coletora">Entidade coletora:</label>
      <select class="form-control" id="sel1" name="entidade_coletora">
     <option selected="{{(empty(old('entidade_coletora')))?$dep->entidade_coletora:old('entidade_coletora')}}"> {{(empty(old('entidade_coletora')))?$dep->entidade_coletora:old('entidade_coletora')}}</option>
     @foreach($entidadecoletora as $e)
        <option value="{{ $e->id}}">{{ $e ->nome  }}</option>
        @endforeach
      </select>


      <input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
                    <a href="/calendarioEvento" class="btn btn-primary btn-sm">Voltar</a>
                </form>

@endsection
