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
        Endereço: <input type="text" name="local_coleta"> <br>
        Entidade Coletora: <input type="text" name="entidade_coletora"> <br>

        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
    </form>
@endsection
