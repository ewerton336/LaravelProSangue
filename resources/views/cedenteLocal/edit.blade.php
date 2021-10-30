@extends('master')
@section('titulo','Editar Cedente')
@section('corpo')
    <div class="container">
        <h3>Editar Cedente Local</h3>
        <div class="row">
            <div class="col-sm-6">
                <form action="/cedenteLocal/{{$dep->id}}" method="post">
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
                        <label for="telefone">Telefone</label>
                        <input type="number" name="telefone" id="telefone" class="form-control"
                               value="{{(empty(old('telefone')))?$dep->telefone:old('telefone')}}"/>
                        @if($errors->has('telefone'))
                            <p class="text-danger">{{$errors->first('telefone')}}</p>
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
                        <label for="responsavel">Responsavel</label>
                        <input type="text" name="responsavel" id="responsavel" class="form-control"
                               value="{{(empty(old('responsavel')))?$dep->responsavel:old('responsavel')}}"/>
                        @if($errors->has('responsavel'))
                            <p class="text-danger">{{$errors->first('responsavel')}}</p>
                        @endif
                    </div>
                    <br>
                    <input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
                    <a href="/doador" class="btn btn-primary btn-sm">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
