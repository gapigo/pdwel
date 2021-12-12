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
        @if(!$last)
            <div class='alert alert-success'>Não há posts disponíveis no momento :(</div>
        @else
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
            @if($old_posts)
            <section class="gray-background ">
                <div class="main-wrapper">
                    <h2 class="title-large">Artigos anteriores</h2>
                    
                    @foreach($old_posts as $old_post)
                    <div class="blog__older">
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
                    </div>
                    @endforeach
                </div>
            </section>
            @endif
        @endif
    </section>

    

@endsection
