@extends('layouts.site')

@section('title')
Blog
@endsection

@section('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
@endsection

@section('content')

    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Artigos recentes</h1>
        </div>
        <div class="pattern__header"></div>
    </header>

    {{-- <section class="main-wrapper flex-container blog__latest"> --}}
        @if(!$last)
            <div class='alert alert-success'>Não há posts disponíveis no momento :(</div>
        @else
        <section class="main-wrapper flex-container blog__latest">
            <article class="last__post">
                <a href="{{route('site.show.post', ['post' => $last])}}">
                    <h1 class="title-medium">{{$last->title}}</h1>
                    <div class="post__cover">
                        <span class="fade-gradient"></span>
                        <img src="{{Storage::url($last->image)}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="{{$last->created_at->format('Y-m-d')}}">{{$last->created_at->format('d/m/Y H:i')}}</time>
                    </header>
                </a>
            </article>
            @if($recent)
                @foreach($recent as $recent_post)
                <article class="card__post">
                    <a href="{{route('site.show.post', ['post' => $recent_post])}}">
                        <div class="post__cover">
                            <img src="{{Storage::url($recent_post->image)}}">
                        </div>
                        <header class="card__post__header">
                            <time class="post__date" datetime="{{$recent_post->created_at->format('Y-m-d')}}">
                                {{$recent_post->created_at->format('d/m/Y H:i')}}</time>
                            <h3 class="body-large">{{$recent_post->title}}</h3>
                        </header>
                    </a>
                </article>
                @endforeach
            @endif
        </section>
            
        <hr>
            @if($old_posts)
            <section class="gray-background ">
                <div class="main-wrapper">
                    <h2 class="title-large">Artigos anteriores</h2>

                    <div class="blog__older">
                        @foreach($old_posts as $old_post)
                        
                            <article class="card__post">
                                <a href="{{route('site.show.post', ['post' => $old_post])}}">
                                    <div class="post__cover">
                                        <img src="{{Storage::url($old_post->image)}}">
                                    </div>
                                    <header class="card__post__header">
                                        <time class="post__date" datetime="{{$old_post->created_at->format('Y-m-d')}}">
                                            {{$old_post->created_at->format('d/m/Y H:i')}}</time>
                                        <h3 class="body-large">{{$old_post->title}}</h3>
                                    </header>
                                </a>
                            </article>
                        
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
        @endif


    

@endsection
