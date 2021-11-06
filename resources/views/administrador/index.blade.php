@extends('master')
@section('titulo', 'cedenteLocal')
@section('corpo')
    <div class="container-fluid col-12">
        <h3>Administradores:</h3>
        <h2><a href="/administrador/create" class="btn btn-primary ">Novo Administrador</a></h2>
        <br>

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>login</th>
                <th>senha</th>
            </tr>
            </thead>
            <tbody>

            @foreach($varView as $e)
                <tr>
                <td> {{$e->id}}</td>
                    <td> {{$e->nome}}</td>
                    <td>  {{ $e ->email }}</td>
                    <td> {{$e ->login}}</td>
                    <td> {{$e ->senha}}</td>  
                    <td> <a href="/administrador/{{$e->id}}/edit" class="btn btn-primary btn-sm">Editar</a></td>
                    <td>  <a href="/administrador/{{$e->id}}" class="btn btn-primary btn-sm">Excluir</a></td>
                </tr>
        @endforeach
    </div>
@endsection

