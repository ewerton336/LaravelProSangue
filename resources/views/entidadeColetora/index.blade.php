@extends('master')
@section('titulo', 'entidade')
@section('corpo')
    <div class="container-fluid col-12">
    <h3>Entidades Coletoras:</h3>
    <h2><a href="/entidadeColetora/create" class="btn btn-primary ">Nova Entidade Coletora</a></h2>
    <br>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>telefone</th>
            <th>nome do responsavel</th>
        </tr>
        </thead>
        <tbody>

    @foreach($varView as $e)
<tr>
        <td> {{$e->id}}</td>
       <td>  {{ $e ->nome  }}</td>
       <td> {{$e ->telefone}}</td>
       <td>  {{$e ->nome_responsavel}}</td>
        <td>  <a href="/entidadeColetora/{{$e->id}}" class="btn btn-primary btn-sm">Detalhe</a></td>
        <td> <a href="/entidadeColetora/{{$e->id}}/edit" class="btn btn-primary btn-sm">Editar</a></td>
</tr>
    </div>

    @endforeach
@endsection

