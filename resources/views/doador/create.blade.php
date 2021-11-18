@extends('master')
@section('titulo', 'Criar')
@section('corpo')
    <h3>Novo Doador</h3>
    @foreach($errors->all() as $e)
        {{$e}}
    @endforeach
    <form action="/doador" method="post">
    @csrf <!-- token de segurança obrigatório -->
        Nome: <input type="text" name="nome"> <br>
        Data de nascimento: <input type="date" name="dt_nascimento"> <br>
        Endereço: <input type="text" name="endereco"> <br>
        Numero da residencia: <input type="number" name="num_residencia"> <br>
        Telefone: <input type="text" name="telefone"> <br>
        Cidade Doação: <input type="text" name="cidade_doacao"> <br>
      Tipo Sanguíneo:  <select class="form-control" id="tipo_sanguineo" name="tipo_sanguineo">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>

 
  </select>
        <input type="submit" class="btn btn-primary btn-sm" value="Criar">
        <a href="/administrador/" class="btn btn-primary btn-sm">Voltar</a>
    </form>
@endsection
