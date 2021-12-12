@extends('layouts.cms')

@section('title')
Editar categoria
@endsection

@section('content')
<header class="common-header">
    <div class="pattern__header"></div>
</header>

<div class="gray-background-fixed"></div>

<section class="cms__container main-wrapper">
    <header class="cms__container__header">
        <ul class="cms__container__header__tabs">
            <li><a href="{{route('cms.home')}}" class="tab__active">Categorias e programadores</a></li>
            <li><a href="{{route('cms.home', ['blog' => 1])}}">Gerenciar blog</a></li>
        </ul>
    </header>
    <form id="category_form" action="{{route('cms.update.category')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">
    <section class="cms__container__content">
        <div class="split__container">
            <h2 class="title-small">Informações da categoria</h2>
            <p>Utilize os campos abaixo para adicionar as informações da categoria</p>

            <label for="category-name">Nome da categoria</label>
            <input id="category-name" type="text" name="name" tabindex="1" required  placeholder="Ex: Desenvolvimento Web"
                value="{{$category->name}}">
            
            <label for="category-description">Descrição da categoria</label>
            <input id="category-description" type="text" name="description" tabindex="1" required autofocus 
            placeholder="Ex: Desenvolva websites e aplicativos focados para web." value="{{$category->description}}">

            <label for="img-product-cover">Imagem de capa</label>
            <div class="input__group">
                <span class="input__group__icon__left"><img src="{{asset('images/toolbar/toolbar-image.svg')}}" alt=""></span>
                <label for="img-product-cover" id="image_label" class="">Imagem.jpg</label>
                <input id="img-product-cover" type="file" accept="image/png, image/jpeg" name="image" required>
                <span class="input__group__icon__right" id="icone_verificado"><img src="{{asset('images/check-icon-success-input-file.svg')}}" alt=""></span>
            </div>
            <span class="hint" id="hint_span">Clique no nome da imagem para carregar uma nova</span>
            <br id="espacamento"><output id="list"></output>
            <script>
                function cleanPreview(){
                let preview = document.getElementById('list').children;
                for(let i = preview.length - 1; i >= 0; i--)
                    preview[i].remove();
                }
                function limparDicas(){
                    document.getElementById('hint_span').remove();
                    document.getElementById('icone_verificado').remove();
                    document.getElementById('espacamento').remove();
                }
                function handleFileSelect (evt) {
                // Loop through the FileList and render image files as thumbnails.
                for (const file of evt.target.files) {

                    cleanPreview();
                    try{limparDicas();} catch(e){}
                    // Render thumbnail.
                    const span = document.createElement('span');
                    const src = URL.createObjectURL(file);
                    span.innerHTML = 
                    `<img style="height: 75px; border: 1px solid #000; margin: 5px"` + 
                    `src="${src}" title="${escape(file.name)}">`;

                    // Muda o nome da imagem que foi inserida
                    document.getElementById('image_label').innerHTML = file.name;

                    document.getElementById('list').insertBefore(span, null);
                }
                }

                document.getElementById('img-product-cover').addEventListener('change', handleFileSelect, false);
            </script>

        </div>
        <hr class="thin_divider_overlap">

        <h2 class="title-small">Todos os serviços dessa categoria</h2>
        <p>Clique no nome do programador para editar as informações ou em "Adicionar novo programador” para adicionar</p>

        <!-- Todos os serviços da categoria-->
        <section class="cms__grid__items">
            @foreach($category->products as $product)
                <a class="item__of__grid">
                    <div class="item__infos">
                        <p class="body-large">{{$product->name}}</p>
                    </div>
                    <button class="item__vetical__menu dropdown">
                        <img src="{{asset('images/vertical-menu.svg')}}" alt="">
                        <div class="dropdown__content">
                            {{-- <p><img src="{{asset('images/edit-icon.svg')}}" alt="">Editar programador</p>
                            <p><img src="{{asset('images/delete-icon.svg')}}" alt="">Excluir programador</p> --}}

                            <p id="edit_programador_button_{{$product->id}}">
                                <img src="{{asset('images/edit-icon.svg')}}" alt="">Editar</p>
                            <p id="delete_programador_button_{{$product->id}}">
                                <img src="{{asset('images/delete-icon.svg')}}" alt="">Excluir</p>
                            <script>
                                document.getElementById("edit_programador_button_{{$product->id}}").onclick = function () {
                                    location.href = "{{route('cms.edit.service', ['product'=> $product])}}";
                                };
                                document.getElementById("delete_programador_button_{{$product->id}}").onclick = function () {
                                    location.href = "{{route('cms.delete.service', ['product'=> $product])}}";
                                };
                            </script>

                        </div>
                    </button>
                </a>
            @endforeach

            <a href="{{route('cms.create.service')}}" class="button add_new button_large" role="button">Adicionar novo programador</a>
        </section>
    </section>

    <footer class="cms__container__footer flex-container">
        <div>
            <button class="button button_primary" id="send_button">Salvar Edição</button>
            <a href="{{route('cms.home')}}" class="button button_secondary" role="button">Cancelar</a>
        </div>
        <div>
            <a class="footer__delete" role="button" 
            href="{{route('cms.delete.category', ['category' => $category])}}">Excluir Categoria</a>
        </div>
        
    </footer>
</form>
</section>

<script>
    function carregarImagem () {
        const span = document.createElement('span');
        const src = `{{Storage::url($category->image)}}`;
        span.innerHTML = 
        `<img style="height: 75px; border: 1px solid #000; margin: 5px"` + 
        `src="${src}" title="{{$category->image}}">`;

        document.getElementById('list').insertBefore(span, null);
    }

    document.onload = carregarImagem();
</script>
<script>
    function sendForm(evt){
        let erros = false;

        if (document.getElementById('category-name').value == ''){
            alert('O nome não pode ser vazio!')
            erros = true;
        }
        if (document.getElementById('category-description').value == ''){
            alert('A descrição não pode ser vazia!')
            erros = true;
        }
        if (!erros){
            document.getElementById('category_form').submit();
        }


    }
document.getElementById('send_button').addEventListener('click', sendForm, false);
</script>
@endsection