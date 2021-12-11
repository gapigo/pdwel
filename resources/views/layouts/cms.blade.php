<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="theme-color" content="Blue"/>
        <meta charset="UTF-8"/>
        <meta name="description" content="Camerarius, raptus devatios inciviliter anhelare de festus, clemens luna. "/>
        <meta name="author" itemprop="MMPX"/>

        <!-- Adicionar Favicon em todas as versões -->
        <link rel="shortcut icon" href="#" type="image/x-icon">
        <link rel="icon" href="#" type="image/x-icon">

        <!-- Tags facebook -->
        <meta property="og:locale" content="pt_BR"/>
        <meta property="og:url" content="virundum"/>
        <meta property="og:title"
            content="Vortexs sunt byssuss de placidus visus. Potus diligenter ducunt ad alter navis. ">
        <meta property="og:site_name" content="Candidatus ">
        <meta property="og:description"
            content="Ubi est albus pars? Cum mortem favere, omnes habitioes promissio grandis, dexter elevatuses. ">
        <meta property="og:type" content="website"/>

        <!-- Links & Scripts -->
        <link rel="stylesheet" href="https://use.typekit.net/nbc5nyh.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <!-- @toastr_css -->


        <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="16x16" type="image/svg">
        <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="32x32" type="image/svg">
        <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="48x48" type="image/svg">

        <link rel="apple-touch-icon" sizes="48x48" href="{{asset('images/Frame.svg')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/Frame.svg')}}">
        <link rel="apple-touch-icon" sizes="96x96" href="{{asset('images/Frame.svg')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/Frame.svg')}}">
        <link rel="apple-touch-icon" sizes="192x192" href="{{asset('images/Frame.svg')}}">
        <link rel="apple-touch-icon" sizes="256x256" href="{{asset('images/Frame.svg')}}">
        <link rel="apple-touch-icon" sizes="384x384" href="{{asset('images/Frame.svg')}}">
        <link rel="apple-touch-icon" sizes="512x512" href="{{asset('images/Frame.svg')}}">

        <!-- Lightbox -->
        <link rel="stylesheet" type="text/css" href="{{asset('lightbox/css/lightbox.css')}}"/>

        @yield('css')

    </head>


    <body>
        <nav>
            <div class="main-wrapper">
                <div class="flex-container">
                    <a class="logotipo" href="{{route('site.home')}}">
                        <img src="{{asset('images/logo.png')}}">
                    </a>
                    <ul class="navigation__itens__cms" id="menu">
                        <p class="tittle-small">Olá, <b>{{Auth::user()->name}}</b></p>
                        <a class="body-medium" href="{{route('site.home')}}">
                            Voltar
                            <img src="{{asset('images/Arrow-left.svg')}}" alt="">
                        </a>
                    </ul>
                </div>
            </div>
        </nav>

         <!-- Modal de video -->
        <div id="modal--video" class="modal modal__medium">
            <div class="modal__header">
                <img src="{{asset('images/toolbar/toolbar-video.svg')}}" alt="">
                <h2 class="title-small">Url para o video</h2>
            </div>
            <div class="modal__content">
                <label for="video-modal">Video</label>
                <div class="input__group">
                    <span class="input__group__icon__left"><img src="{{asset('images/toolbar/toolbar-video.svg')}}" alt=""></span>
                    <input id="video-modal" type="text" tabindex="1" required autofocus placeholder="Cole a URL do video aqui">
                    <pan class="input__group__icon__right"><img src="{{asset('images/check-icon-success-input-file.svg')}}" alt=""></span>
                </div>
            </div>
            <div class="modal__footer">
                <button class="button button_primary">Adicionar video ao post</button>
                <button class="button button_secondary">Cancelar</button>
            </div>
        </div>

        <!-- modal imagem -->
        <div id="modal--image" class="modal modal__medium">
            <div class="modal__header">
                <img src="{{asset('images/toolbar/toolbar-image.svg')}}" alt="">
                <h2 class="title-small">Selecione a imagem</h2>
            </div>
            <div class="modal__content">
                <label for="img-modal" class="modal__drop__area">Arraste e solte sua imagem aqui ou<br> clique para procurar</label>
                <input id="img-modal" type="file" accept="image/png, image/jpeg" required>
                
                <div class="input__group">
                    <span class="input__group__icon__left"><img src="{{asset('images/toolbar/toolbar-image.svg')}}" alt=""></span>
                    <label for="img-modal" class="">Imagem.jpg</label>
                    <input id="img-modal" type="file" accept="image/png, image/jpeg" required>
                    <span class="input__group__icon__right"><img src="{{asset('images/check-icon-success-input-file.svg')}}" alt=""></span>
                </div>
            </div>

            <div class="modal__footer">
                <button class="button button_primary">Adicionar imagem ao post</button>
                <button class="button button_secondary">Cancelar</button>
            </div>
        </div>

        <!-- modal gallery -->
        <div id="modal--gallery" class="modal modal__medium">
            <div class="modal__header">
                <img src="{{asset('images/toolbar/toolbar-gallery.svg')}}" alt="">
                <h2 class="title-small">Selecione as imagens para a galeria</h2>
            </div>
            <div class="modal__content">
                <label for="gallery-modal" class="modal__drop__area">
                    <span>Arraste e solte sua imagem aqui ou<br> clique para procurar</span> 
                    <span>No recurso de galeria você pode adicionar de 1 a 6 imagens</span>
                </label>
                
                <div class="input__group">
                    <span class="input__group__icon__left"><img src="{{asset('images/toolbar/toolbar-gallery.svg')}}" alt=""></span>
                    <label for="gallery-modal">Imagem.jpg</label>
                    <input id="gallery-modal" type="file" multiple accept="image/png, image/jpeg" required>
                    <span class="input__group__icon__right"><img src="{{asset('images/check-icon-success-input-file.svg')}}" alt=""></span>
                </div>
                <div class="input__group">
                    <span class="input__group__icon__left"><img src="{{asset('images/toolbar/toolbar-gallery.svg')}}" alt=""></span>
                    <label for="gallery-modal">Imagem.jpg</label>
                    <input id="gallery-modal" type="file" multiple accept="image/png, image/jpeg" required>
                    <span class="input__group__icon__right"><img src="{{asset('images/check-icon-success-input-file.svg')}}" alt=""></span>
                </div>
                <div class="input__group">
                    <span class="input__group__icon__left"><img src="{{asset('images/toolbar/toolbar-gallery.svg')}}" alt=""></span>
                    <label for="gallery-modal">Imagem.jpg</label>
                    <input id="gallery-modal" type="file" multiple accept="image/png, image/jpeg" required>
                    <span class="input__group__icon__right"><img src="{{asset('images/check-icon-success-input-file.svg')}}" alt=""></span>
                </div>
            </div>

            <div class="modal__footer">
                <button class="button button_primary">Adicionar imagens ao post</button>
                <button class="button button_secondary">Cancelar</button>
            </div>
        </div>

        <!-- Delete modal -->
        <div id="modal--delete" class="modal modal__small">
            <div class="modal__content">
                <img src="{{asset('images/disco-delete-modal.svg')}}" alt="">
                <p>
                    Deseja excluir essa categoria?<br>
                    Caso a categoria possua algum produto cadastrado ele também será excluido
                </p>
                <button class="button button_danger">Excluir categoria</button>
            </div>
        </div>

        <!-- Delete success -->
        <div id="modal--success" class="modal modal__small">
            <div class="modal__content">
                <img src="{{asset('images/hands-success-modal.svg')}}" alt="">
                <p>Tudo certo, suas alterações foram realizadas com sucesso</p>
                <button class="button button_primary">Ir para home</button>
            </div>
        </div>


        <div class="overlay"></div>


        <script type="text/javascript">
        $(document).ready(function() {
            $(".trigger").click(function() {
                $(".overlay").show();
                $("#modal--" + $(this).data("modal")).toggleClass("show-modal");
            });

            $(".close-button").click(function(e) {
                e.preventDefault();
                $(this).parent().parent().toggleClass("show-modal");
                $(".overlay").hide();
            });

            $(".overlay").click(function() {
                $(".modal").each(function() {
                    $(this).removeClass("show-modal");
                });
                $(".overlay").hide();
            });
        });
        </script>
@yield('content')

<div class="simple-footer main-wrapper">
    <p>CMS</p>
</div>
</body>
</html>

