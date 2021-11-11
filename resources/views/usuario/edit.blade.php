@extends('master')
@section('titulo','Editar Usuario')
@section('corpo')
    <div class="container">
        <h3>Editar Usuario</h3>
        <div class="row">
            <div class="col-sm-6">
                <form action="/usuario/{{$dep->id}}" method="post">
                @csrf  <!-- token de segurança -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" class="form-control"
                               value="{{(empty(old('login')))?$dep->login:old('login')}}"/>
                        @if($errors->has('login'))
                            <p class="text-danger">{{$errors->first('login')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                               value="{{(empty(old('email')))?$dep->email:old('email')}}"/>
                        @if($errors->has('dt_nascimento'))
                            <p class="text-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control"
                               value="{{(empty(old('senha')))?$dep->senha:old('senha')}}"/>
                        @if($errors->has('senha'))
                            <p class="text-danger">{{$errors->first('senha')}}</p>
                        @endif
                    </div>
                    <input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
                    <a href="/usuario" class="btn btn-primary btn-sm">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
