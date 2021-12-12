@extends('layouts.cms')

@section('title')
Editar categorias
@endsection

@section('content')
<header class="common-header">
    <div class="pattern__header"></div>
</header>

<div class="gray-background-fixed"></div>

<!-- Categoria e produto aba -->
<section class="cms__container main-wrapper" id="secao_categoria">
    <header class="cms__container__header">
        <ul class="cms__container__header__tabs">
            <li><a class="tab__active">Categorias e programadores</a></li>
            <li><a id="nav_blog">Gerenciar blog</a></li>
        </ul>
    </header>
    <section class="cms__container__content">

        <h2 class="title-small">Categorias de serviços</h2>
        <p>Para editar a categoria, visualizar ou editar produtos clique no nome da categoria desejada</p>
        <section class="cms__grid__items">

            @foreach($categories as $category)
            <a class="item__of__grid">
                <div class="item__infos">
                    <p class="body-large">{{$category->name}}</p>
                    <p class="body-medium">{{count($category->products)}} programadores</p>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        <p id="edit_button_{{$category->id}}">
                            <img src="{{asset('images/edit-icon.svg')}}" alt="">Editar categoria</p>
                        <p id="delete_button_{{$category->id}}">
                            <img src="{{asset('images/delete-icon.svg')}}" alt="">Excluir categoria</p>
                        <script>
                            document.getElementById("edit_button_{{$category->id}}").onclick = function () {
                                location.href = "{{route('cms.edit.category', ['category'=> $category])}}";
                            };
                            document.getElementById("delete_button_{{$category->id}}").onclick = function () {
                                location.href = "{{route('cms.delete.category', ['category'=> $category])}}";
                            };
                        </script>
                    </div>
                </button>
            </a>
            @endforeach

            <a href="{{route('cms.create.category')}}" class="button add_new button_large" role="button">Adicionar nova
                categoria</a>
        </section>

    </section>
</section>

<!-- Blog aba -->
<section class="cms__container main-wrapper" style="display: none" id="secao_blog">
    <header class="cms__container__header">
        <ul class="cms__container__header__tabs">
            <li><a id="nav_categoria">Categorias e programadores</a></li>
            <li><a class="tab__active">Gerenciar blog</a></li>
        </ul>
    </header>
    <section class="cms__container__content cms__blog__grid">

        <h2 class="title-small">Suas postagens</h2>
        <p>Para editar uma postagem clique no nome do post, para publicar uma nova, cique em "Adicionar novo post”</p>

        <section class="cms__grid__items">

            <a href="{{route('cms.create.post')}}" class="button add_new button_large" role="button">Adicionar novo Post</a>

            @foreach($posts as $post)
            <a class="item__of__grid button_large">
                <div class="item__infos item__infos__title">
                    <p class="body-medium">Título</p>
                    <p class="body-large">{{$post->title}}</p>
                </div>

                <div class="item__infos item__infos__author">
                    <p class="body-medium">Autor</p>
                    <p class="body-large">{{$post->user->name}}</p>
                </div>
                <div class="item__infos item__infos__date">
                    <p class="body-medium">Data</p>
                    <time class="body-large">{{$post->created_at->format('d/m/Y')}}</time>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        {{-- <p><img src="./images/edit-icon.svg" alt="">Editar postagem</p>
                        <p><img src="./images/delete-icon.svg" alt="">Excluir postagem</p> --}}
                        <p id="edit_post_button_{{$post->id}}">
                            <img src="{{asset('images/edit-icon.svg')}}" alt="">Editar categoria</p>
                        <p id="delete_post_button_{{$post->id}}">
                            <img src="{{asset('images/delete-icon.svg')}}" alt="">Excluir categoria</p>
                        <script>
                            document.getElementById("edit_post_button_{{$post->id}}").onclick = function () {
                                location.href = "{{route('cms.edit.post', ['post'=> $post])}}";
                            };
                            document.getElementById("delete_post_button_{{$post->id}}").onclick = function () {
                                location.href = "{{route('cms.delete.post', ['post'=> $post])}}";
                            };
                        </script>
                    </div>
                </button>
            </a>
            @endforeach

        </section>
    </section>
</section>
<script>
    document.getElementById("nav_categoria").onclick = function () {
        document.getElementById("secao_categoria").style.display = "block";
        document.getElementById("secao_blog").style.display = "none";
    };
    document.getElementById("nav_blog").onclick = function () {
        document.getElementById("secao_blog").style.display = "block";
        document.getElementById("secao_categoria").style.display = "none";
    };
</script>
@endsection

