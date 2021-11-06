@extends('master')
@section('titulo', 'cedenteLocal')
@section('corpo')
    <div class="container-fluid col-12">
        <h3>Cedentes de locais:</h3>
        <h2><a href="/cedenteLocal/create" class="btn btn-primary ">Novo Cedente de Local</a></h2>
        <br>

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>telefone</th>
                <th>endereco</th>
                <th>nome do responsavel</th>
            </tr>
            </thead>
            <tbody>

            @foreach($varView as $e)
                <tr>
                    <td> {{$e->id}}</td>
                    <td>  {{ $e ->nome  }}</td>
                    <td> {{$e ->telefone}}</td>
                    <td> {{$e ->endereco}}</td>
                    <td>  {{$e ->responsavel}}</td>
                   
                    <td> <a href="/cedenteLocal/{{$e->id}}/edit" class="btn btn-primary btn-sm">Editar</a></td>
                    <td>  <a href="/cedenteLocal/{{$e->id}}" class="btn btn-primary btn-sm">Excluir</a></td>
                </tr>
    @endforeach
    </div>
@endsection

