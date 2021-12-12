@extends('layouts.site')

@section('title')
Home
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

@section('content')
        <div class="gray-background">
            <div class="login__center main-wrapper" style="margin-bottom: 20%">
                <form class="form__login" action="{{route('cms.login.post')}}" method="post" style="margin-top: 13%">
                    @csrf
                    <div class="form__login__header flex-container">
                        <img src="./images/Login-Icon.svg" alt="Login icon">
                        <h2 class="title-small">CMS<h2>
                    </div>
                    <div class="form__login__content">
                        <label for="email">Digite seu email</label>
                        <input type="email" id="email" name="email" required tabindex="1" autofocus placeholder="email@email.com.br">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="password">Digite sua senha</label>
                        <input type="password" id="password" name="password" required tabindex="2" placeholder="••••••••••••">

                        {{-- <a href="cms-home.php" class="button button_primary" type="submit" role="button">login</a> --}}
                        <div style="justify-content: center; align-items:center; width:100%; display: flex;">
                            <button class="button button_primary" type="submit">Logar</button>
                        </div>
                        
                        <div>
                            <a href="{{route('cms.register.index')}}">Não tem conta?</a>
                        </div>
                        <a href="{{route('site.home')}}">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
@endsection