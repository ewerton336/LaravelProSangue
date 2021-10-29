@extends('master')
@section('titulo', 'doador')
@section('corpo')
    <div class="container-fluid col-12">
    <h3>Doadores:</h3>
    <a href="/doador/create">Novo Doador</a>

        <h1>teste</h1>
    <br>

        <table class="table">
            <thead>
            <tr>
            <th>id</th>
            <th>nome</th>
            <th>data de nascimento</th>
            <th>endereco</th>
            <th>numero</th>
            <th>telefone</th>
            <th>cidade doacao</th>
            <th>tipo sanguineo</th>
            </tr>
            </thead>
            <tbody>

    @foreach($varView as $d)
    <tr>
           <td>{{$d->id}} </td>
           <td>{{ $d ->nome  }} </td>
           <td>{{$d ->dt_nascimento}}</td>
           <td> {{$d ->num_residencia}}</td>
           <td> {{$d ->endereco}}</td>
           <td> {{$d ->telefone}}</td>
           <td> {{$d ->cidade_doacao}}</td>
           <td> {{$d ->tipo_sanguineo}}</td>
       <td>  <a href="/doador/{{$d->id}}" class="btn btn-primary btn-sm">Detalhe</a> </td>
       <td>  <a href="/doador/{{$d->id}}/edit" class="btn btn-primary btn-sm">Editar</a> </td>
    </tr>

        <br>
    @endforeach
            </tbody>
        </table>
    </div>

@endsection

