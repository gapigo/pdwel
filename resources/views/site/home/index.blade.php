@extends('layouts.site')

@section('title')
Home
@endsection

@section('content')
<header>
    <div class="hero">
        <div class="main-wrapper">
            <div class="hero__content">
                <h1 class="display-large">A assistência técnica sem complicação!</h1>
                <a class="button button_sublte button_large" href="javascript:;" role="button">Solicite um programador</a>
            </div>
            <section class="docked-bar flex-container">
                <div class="hero__information">
                    <p>Para mais dúvidas, disque: </p>
                </div>
                <div class="talk-to-us">
                    <img src="{{asset('images/Phone-Icon.svg')}}" alt="Telefone Icone">
                    <a title="Clique no número do telefone para ligar" href="tel:(16) 99999-9999">(16) 99999-9999</a>
                </div>
            </section>
        </div>
    </div>
</header>

<section class="category gray-background">
    <div class="main-wrapper flex-container">
        <section class="cultivation__category">
            <picture>
                <source media="(max-width: 768px)" srcset="./images/rachel-moenning-zjxYwd4HOu0-unsplash.jpg">
                <img src="{{asset('images/rachel-moenning-zjxYwd4HOu0-unsplash.jpg')}}" alt="Capios accelerare, tanquam
                        superbus stella. cur rector volare?" width="297" height="447">
            </picture>
            <div class="infos__category">
                <h2 class="title-large">Desenvolvedores disponíveis <strong>24h </strong></h2>
                <hr class="thick_divider">
                <p>A todo minuto um programador estará disponível para te oferecer suporte.</p>
                <a href="products.php" role="button" class="button button_accent
                        button_large">Programadores disponíveis</a>
            </div>
            <img class="home-pattern" src="{{asset('images/home-dots-pattern.svg')}}" alt="">
        </section>
        <section class="animal__category">
            <picture>
                <source media="(max-width: 768px)" srcset="{{asset('images/andrew-neel-ute2XAFQU2I-unsplash.jpg')}}">
                <img src="{{asset('images/andrew-neel-ute2XAFQU2I-unsplash.jpg')}}" alt="Animais, bovino, suíno e aves" width="297"
                     height="447">
            </picture>
            <div class="infos__category">
                <h2 class="title-large">Suporte <strong>100% online </strong></h2>
                <hr class="thick_divider">
                <p>Tudo o que você precisa na palma da sua mão. Solicite um programador sem precisar sair de casa.</p>
                <a href="products-animals.php" role="button" class="button button_accent button_large">Atendimento on-line </a>
            </div>
            <img class="home-pattern" src="{{asset('images/home-dots-pattern.svg')}}" alt="">
        </section>
    </div>
</section>

<section class="blog">
    <div class="main-wrapper">
        <div class="blog__container">
            <div class="blog__introduction">
                <h2 class="title-large">Conheça alguns casos de sucesso!</h2>
                <p>Temos uma gama gigantesca de programadores das mais diversas áreas que já foram 
                    capazes de solucionar as dores de mais de 200 clientes</p>
                <a href="blog.php" role="button">Ver mais</a>
            </div>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">E-commerce para loja de roupas.</h3>
                    </header>
                </a>
            </article>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/roman-synkevych-vXInUOv1n84-unsplash.jpg')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">21 Fevereiro, 2020</time>
                        <h3 class="body-large">App para clínica de estética. </h3>
                    </header>
                </a>
            </article>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/max-duzij-qAjJk-un3BI-unsplash.jpg')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">05 Maio, 2020</time>
                        <h3 class="body-large">Automação para diretores cinematográficos. </h3>
                    </header>
                </a>
            </article>
        </div>
    </div>
    <div class="pattern"></div>
</section>

<div class="gray-background testimonials__mobile">
    <div class="main-wrapper flex-container">
        <section class="testimonials">
            <h2 class="title-large">Conheça nossos clientes. <br>O que você pode esperar de nós.</h2>
            <section class="flex-container">
                <article class="quote">
                    <div class="avatar__testimonial">
                        <img src="{{asset('images/Avatar-testimonial.png')}}">
                    </div>
                    <blockquote>
                        O time da WebsiteDiary é simplesmente o melhor com quem já trabalhei. Sempre presentes quando 
                        precisei, resolveram meu problema com maestria.
                    </blockquote>
                    <footer>
                        <h4 class="title-medium">Estela Santana. </h4>
                        <p>Líder do grupo Carrefour. </p>
                    </footer>
                </article>

                <article class="quote">
                    <div class="avatar__testimonial">
                        <img src="{{asset('images/Avatar-testimonial.png')}}">
                    </div>
                    <blockquote>
                        A rapidez com que conseguiram desenvolver o aplicativo para minha empresa foi 
                        sem igual. Foi muito bom poder contar co os meninos da WebsiteDiary.
                    </blockquote>
                    <footer>
                        <h4 class="title-medium">Murilo Brás. </h4>
                        <p>CEO da Renner. </p>
                    </footer>
                </article>
            </section>
        </section>
    </div>

    <a style="background-image: url(https://i.ibb.co/RvTJC4r/whatsapp.png); border-radius: 34px;width: 60px; font-size: 0; height: 60px;position: fixed;right: 10px;z-index: 999;display: block;bottom: 10px;background-size: 73%;background-repeat: no-repeat;background-color: #1bd741;background-position: center;" target="_blank" href="https://wa.me/5511954836882?text=Ol%C3%A1%2C%20precisa%20de%20ajuda%3F">link whatsapp</a>
</div>

<section class="cta__home">
    <div class="cta__wrapper">
        <h2 class="title-large">Está esperando o que?</h2>
        <p>Nos conte seu problema, nos mostre sua ideia que faremos ela se tornar realidade!</p>
        <a href="products.php" role="button" class="button button_accent">Faça um orçamento </a>
    </div>
    <div class="pattern"></div>
</section>
@endsection
