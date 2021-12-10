@extends('layouts.site')

@section('title')
Sobre
@endsection

@section('content')
    <div class="green-background">
        <div class="half-green-background"></div>

        <div class="main-wrapper split-content">
            <!-- Conteudo sobre a empresa -->
            <section class="about__content">
                <section class="about__history">
                    <h1 class="display-medium">A empresa que soluciona seus problemas tecnológicos.</h1>
                    <p><strong>Missão:</strong> Trazer a tecnologia para mais perto do nosso cliente, sem complicação. Demonstrar
                seriedade, transparência em uma linguagem mais próxima ao nosso usuário.</p>
                    <p><strong>Ajudar </strong>a solucionar os problemas de qualquer lugar do mundo, sem deslocamentos desnecessários.</p>
                    <p><strong>Resolver </strong>bugs mesmo que eles sejam de uma aplicação não desenvolvida pela nossa equipe.</p>
                </section>
                <p>Conte com nosso time para facilitar seu acesso no digital!</p>

                <section class="about__clients">
                    <div class="about__clients__logos">
                        <img src="{{asset('images/logo-5.svg')}}" alt="">
                        <img src="{{asset('images/logo-6.svg')}}" alt="">
                        <img src="{{asset('images/logo-7.svg')}}" alt="">
                        <img src="{{asset('images/logo-8.svg')}}" alt="">
                    </div>
                </section>
            </section>

            <!-- Imagem valores da empresa -->
            <section class="about__img__values">
                <img src="{{asset('images/Pilares.svg')}}" alt="">
            </section>
        </div>
    </div>
@endsection
