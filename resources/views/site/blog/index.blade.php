@extends('layouts.site')

@section('title')
Blog
@endsection

@section('content')

    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Artigos recentes</h1>
        </div>
        <div class="pattern__header"></div>
    </header>

    <section class="main-wrapper flex-container blog__latest">

        <article class="last__post">
            <a href="post.php">
                <div class="post__cover">
                    <span class="fade-gradient"></span>
                    <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                </div>
                <header class="card__post__header">
                    <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                    <h3 class="title-medium">E-commerce para loja de roupas. </h3>
                </header>
            </a>
        </article>

        <article class="card__post">
            <a href="post.php">
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
            <a href="post.php">
                <div class="post__cover">
                    <img src="{{asset('images/max-duzij-qAjJk-un3BI-unsplash.jpg')}}">
                </div>
                <header class="card__post__header">
                    <time class="post__date" datetime="2019-03-29">05 Maio, 2020</time>
                    <h3 class="body-large">Automação para diretores cinematográficos. </h3>
                </header>
            </a>
        </article>
    </section>

    <section class="gray-background ">
        <div class="main-wrapper">
            <h2 class="title-large">Artigos anteriores</h2>

            <div class="blog__older">
                <article class="card__post">
                    <a href="post.php">
                        <div class="post__cover">
                            <img src="{{asset('images/blog/blake-connally-B3l0g6HLxr8-unsplash.jpg')}}">
                        </div>
                        <header class="card__post__header">
                            <time class="post__date" datetime="2019-03-29">29 Março, 2018</time>
                            <h3 class="body-large">Desenvolvimento de site para restaurante. </h3>
                        </header>
                    </a>
                </article>

                <article class="card__post">
                    <a href="post.php">
                        <div class="post__cover">
                            <img src="{{asset('images/blog/kobu-agency-67L18R4tW_w-unsplash.jpg')}}">
                        </div>
                        <header class="card__post__header">
                            <time class="post__date" datetime="2019-03-29">12 Abril, 2018</time>
                            <h3 class="body-large">Plataforma virtual de aulas online e cursos remotos. </h3>
                        </header>
                    </a>
                </article>

                <article class="card__post">
                    <a href="post.php">
                        <div class="post__cover">
                            <img src="{{asset('images/blog/markus-spiske-hvSr_CVecVI-unsplash.jpg')}}">
                        </div>
                        <header class="card__post__header">
                            <time class="post__date" datetime="2019-03-29">09 Agosto, 2018</time>
                            <h3 class="body-large">Solução de bugs em aplicação já pronta por outra empresa de devs. </h3>
                        </header>
                    </a>
                </article>

                <article class="card__post">
                    <a href="post.php">
                        <div class="post__cover">
                            <img src="{{asset('images/blog/blake-connally-IKUYGCFmfw4-unsplash.jpg')}}">
                        </div>
                        <header class="card__post__header">
                            <time class="post__date" datetime="2019-03-29">30 Outubro, 2018</time>
                            <h3 class="body-large">Automação de manuseio de luzes para uma boate de Curitiba. </h3>
                        </header>
                    </a>
                </article>
            </div>
            <div class="show-more">
                <a href="javascript:;" class="button button_secondary">Mais artigos</a>
                <div>
                </div>
    </section>

@endsection
