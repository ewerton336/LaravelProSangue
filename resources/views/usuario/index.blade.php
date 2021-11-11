@extends('master')
@section('titulo', 'Usuario')
@section('corpo')
    <div class="container-fluid col-12">
        <h3>Usuarios:</h3>
        <h2><a href="/usuario/create" class="btn btn-primary ">Novo Usuario</a></h2>
        <br>

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>login</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
            </thead>
            <tbody>

            @foreach($varView as $e)
                <tr>
                <td> {{$e->id}}</td>
                <td> {{$e->login}}</td>
                    <td> {{$e->email}}</td>
                    <td>  {{ $e ->senha }}</td>
                    <td> <a href="/usuario/{{$e->id}}/edit" class="btn btn-primary btn-sm">Editar</a></td>
                    <td>  <a href="/usuario/{{$e->id}}" class="btn btn-primary btn-sm">Excluir</a></td>
                </tr>
        @endforeach
    </div>
@endsection

