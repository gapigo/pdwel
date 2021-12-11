@extends('layouts.site')

@section('title')
Cadastrar conta
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

@section('content')
        <div class="gray-background" style="margin-bottom: 30%;">
            <div class="login__center main-wrapper" >
                <form class="form__login" action="{{route('cms.register.post')}}" method="post">
                    @csrf
                    <div class="form__login__header flex-container" style="margin-top: 20%;">
                        <img src="./images/Login-Icon.svg" alt="Login icon">
                        <h2 class="title-small">CMS<h2>
                    </div>
                    <div class="form__login__content">
                        <label for="name">Digite seu nome</label>
                        <input type="text" id="name" name="name" required tabindex="1" autofocus placeholder="Danilo Sampaio">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="email">Digite seu email</label>
                        <input type="email" id="email" name="email" required tabindex="2" autofocus placeholder="email@email.com.br">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="password">Digite sua senha</label>
                        <input type="password" id="password" name="password" required tabindex="3" placeholder="••••••••••••">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="password_confirmation">Confirme sua senha</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required tabindex="4" placeholder="••••••••••••">
                        @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        {{-- <a href="{{route('cms.register.post')}}" class="button button_primary" role="button">Registrar</a> --}}
                        
                        <div style="justify-content: center; align-items:center; width:100%; display: flex;">
                            <button class="button button_primary" type="submit">Registrar</button>
                        </div>
                        <div>
                            <a href="{{route('cms.login.index')}}">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection