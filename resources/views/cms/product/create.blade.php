@extends('layouts.cms')

@section('title')
Editar categorias
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
    <form id="programador_form" action="{{route('cms.update.service')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="0">
        <input type="hidden" name="category_id" value="{{$category->id}}">
        <section class="cms__container__content">
            <div class="split__container">
                <h2 class="title-small">Informações da categoria</h2>
                <p>Utilize os campos abaixo para adicionar as informações da categoria</p>

                <label for="category-name" class="label__disabled">Nome da categoria</label>
                <input id="category-name" class="input_disabled" type="text" disabled value="{{$category->name}}">

                <label for="category-name" class="label__disabled">Descrição da categoria</label>
                <input id="category-name" class="input_disabled" type="text" disabled value="{{$category->description}}">

                <label for="img-product-cover" class="label__disabled">Imagem de capa</label>
                <div class="input__group input__group__disabled">
                    <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-image.svg" alt=""></span>
                    <label for="img-product-cover" class="">Imagem.jpg</label>
                    <input id="img-product-cover" type="file" accept="image/png, image/jpeg" disabled>
                    <span class="input__group__icon__right"><img src="./images/check-icon-disabled-input-file.svg" alt=""></span>
                </div>
            </div>

                <hr class="thin_divider_overlap">

            <div class="split__container">

                <!-- Conteudo do programador -->
                <h2 class="title-small">Novo programador</h2>
                <p>Adicione um novo programador a essa categoria</p>

                <label for="product-name">Nome do programador</label>
                <input id="product-name" type="text" autofocus required tabindex="1" placeholder="João Ferreira" name="name">

                <label for="product-description">Descrição</label>
                <textarea id="product-description" cols="30" rows="auto" required tabindex="2" 
                placeholder="Ex: Sou um programador formado em engenharia de software..." name="description"></textarea>

                <h2 class="title-small">Etiqueta de programador parceiro</h2>
                <p>Ative este campo para adicionar uma etiqueta de parceria</p>

                <div class="toggle__container">
                    <div class="toggle__holder toggle__holder__active">
                        <p>Mostrar como parceiro</p>
                        <div class="toggle" id="toggle_exclusive"></div>
                        <input type="hidden" name="exclusive" id="exclusive" value="0">
                        <script>
                            function toggleExclusive (){
                                let input = document.getElementById('exclusive');
                                if (input.value == "1"){
                                    input.value = "0";
                                    document.getElementById('toggle_exclusive').classList.remove('toggle--active');
                                }
                                else{
                                    input.value = "1";
                                    document.getElementById('toggle_exclusive').classList.add('toggle--active');
                                }
                            }
                            document.getElementById('toggle_exclusive').addEventListener('click', toggleExclusive, false);
                        </script>
                    </div>
                </div>

            </div>
        </section>

        <footer class="cms__container__footer flex-container">
            <div>
                <button class="button button_primary" id="send_button">Adicionar novo programador</button>
                <a href="{{route('cms.home')}}" class="button button_secondary" role="button">Cancelar</a>
            </div>
            <div>
                <a class="footer__delete__disabled" role="button">Excluir Programador</a>
            </div>
            
        </footer>
    </form>
</section>
<script>
    function sendForm(evt){
        let erros = false;

        if (document.getElementById('product-name').value == ''){
            alert('Insira um nome!')
            erros = true;
        }
        if (document.getElementById('product-description').value == ''){
            alert('Insira uma descrição!')
            erros = true;
        }
        if (!erros){
            document.getElementById('programador_form').submit();
        }


    }
document.getElementById('send_button').addEventListener('click', sendForm, false);
</script>
@endsection

