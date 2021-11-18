@extends('master')
@section('titulo', 'Criar')
@section('corpo')
    <h3>Novo Evento</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/calendarioEvento" method="post">
    @csrf <!-- token de segurança obrigatório -->
        Nome do evento: <input type="text" name="nome_evento"> <br>
        Data: <input type="datetime-local" name="dt_evento"> <br>
       

        <h5> Endereço (do Cedente do local) </h5>
             <select class="form-control" id="local_coleta" name="local_coleta">
             @foreach($cedentesLocal as $c)
             <option value="{{ $c->endereco }}">{{$c->endereco}}</option>
              @endforeach
  </select>

  <h5> Entidade Coletora: </h5>
             <select class="form-control" id="entidade_coletora" name="entidade_coletora">
             @foreach($entidadescoletoras as $e)
             <option value="{{ $e->nome }}">{{$e->nome}}</option>
              @endforeach
  </select>

        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
        <a href="/calendarioEvento/" class="btn btn-primary btn-sm">Voltar</a>
    </form>
@endsection
