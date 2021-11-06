@extends('master')
@section('titulo', 'cedenteLocal')
@section('corpo')
    <div class="container-fluid col-12">
        <h3>Calendario de Eventos:</h3>
        <h2><a href="/calendarioEvento/create" class="btn btn-primary ">Novo Evento</a></h2>
        <br>

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>nome do evento</th>
                <th>data do evento</th>
                <th>quantidade de interessados</th>
                <th>local de coleta</th>
                <th>entidade coletora</th>
            </tr>
            </thead>
            <tbody>

            @foreach($varView as $e)
                <tr>
                    <td> {{$e->id}}</td>
                    <td>  {{ $e ->nome_evento }}</td>
                    <td> {{$e ->dt_evento}}</td>
                    <td> {{$e ->qtd_interessados}}</td>
                    <td>  {{$e ->local_coleta}}</td>
                    <td>  {{$e ->entidade_coletora}}</td>                
                    <td> <a href="/calendarioEvento/{{$e->id}}/edit" class="btn btn-primary btn-sm">Editar</a></td>
                    <td>  <a href="/calendarioEvento/{{$e->id}}" class="btn btn-primary btn-sm">Excluir</a></td>
                </tr>
        @endforeach
    </div>
@endsection

