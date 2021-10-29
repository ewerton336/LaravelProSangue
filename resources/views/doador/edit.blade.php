@extends('master')
@section('titulo','Editar Doador')
@section('corpo')
    <div class="container">
        <h3>Editar doador</h3>
        <div class="row">
            <div class="col-sm-6">
                <form action="/doador/{{$dep->id}}" method="post">
                @csrf  <!-- token de segurança -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control"
                               value="{{(empty(old('nome')))?$dep->nome:old('nome')}}"/>
                        @if($errors->has('nome'))
                            <p class="text-danger">{{$errors->first('nome')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="dt_nascimento">Data de nascimento</label>
                        <input type="date" name="dt_nascimento" id="dt_nascimento" class="form-control"
                               value="{{(empty(old('sigla')))?$dep->dt_nascimento:old('dt_nascimento')}}"/>
                        @if($errors->has('dt_nascimento'))
                            <p class="text-danger">{{$errors->first('dt_nascimento')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="form-control"
                               value="{{(empty(old('endereco')))?$dep->endereco:old('endereco')}}"/>
                        @if($errors->has('endereco'))
                            <p class="text-danger">{{$errors->first('endereco')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="num_residencia">Numero da Residencia</label>
                        <input type="number" name="num_residencia" id="num_residencia" class="form-control"
                               value="{{(empty(old('num_residencia')))?$dep->num_residencia:old('num_residencia')}}"/>
                        @if($errors->has('num_residencia'))
                            <p class="text-danger">{{$errors->first('num_residencia')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="number" name="telefone" id="telefone" class="form-control"
                               value="{{(empty(old('telefone')))?$dep->telefone:old('telefone')}}"/>
                        @if($errors->has('telefone'))
                            <p class="text-danger">{{$errors->first('telefone')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="cidade_doacao">Cidade de Doação</label>
                        <input type="text" name="cidade_doacao" id="cidade_doacao" class="form-control"
                               value="{{(empty(old('cidade_doacao')))?$dep->cidade_doacao:old('cidade_doacao')}}"/>
                        @if($errors->has('cidade_doacao'))
                            <p class="text-danger">{{$errors->first('cidade_doacao')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="tipo_sanguineo">Tipo Sanguineo</label>
                        <input type="text" name="tipo_sanguineo" id="tipo_sanguineo" class="form-control"
                               value="{{(empty(old('tipo_sanguineo')))?$dep->cidade_doacao:old('tipo_sanguineo')}}"/>
                        @if($errors->has('tipo_sanguineo'))
                            <p class="text-danger">{{$errors->first('tipo_sanguineo')}}</p>
                        @endif
                    </div>
                    <input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
                    <a href="/doador" class="btn btn-primary btn-sm">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
