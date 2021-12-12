@extends('layouts.cms')

@section('title')
Criar categoria
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
        <input type="hidden" name="id" value="0">
    <section class="cms__container__content">
        <div class="split__container">
            <h2 class="title-small">Nova categoria</h2>
            <p>Utilize os campos abaixo para adicionar as informações da categoria</p>

            <label for="category-name">Nome da categoria</label>
            <input id="category-name" type="text" name="name" tabindex="1" required autofocus placeholder="Ex: Desenvolvimento Web">

            <label for="category-description">Descrição da categoria</label>
            <input id="category-description" type="text" name="description" tabindex="1" required autofocus placeholder="Ex: Desenvolva websites e aplicativos focados para web.">

            <span class="label">Imagem de capa</span>
            <label for="category-img" class="button add_new">Clique para adiconar imagem de capa</label>
            <input id="category-img" name="image" value="Clique para adiconar imagem de capa" type="file" tabindex="2" multiple  accept="image/png, image/jpeg" required>
            <output id="list"></output>
            <script>
                function cleanPreview(){
                let preview = document.getElementById('list').children;
                for(let i = preview.length - 1; i >= 0; i--)
                    preview[i].remove();
                }
                function handleFileSelect (evt) {
                // Loop through the FileList and render image files as thumbnails.
                for (const file of evt.target.files) {

                    cleanPreview();
                    // Render thumbnail.
                    const span = document.createElement('span')
                    const src = URL.createObjectURL(file)
                    span.innerHTML = 
                    `<img style="height: 75px; border: 1px solid #000; margin: 5px"` + 
                    `src="${src}" title="${escape(file.name)}">`

                    document.getElementById('list').insertBefore(span, null)
                }
                }

                document.getElementById('category-img').addEventListener('change', handleFileSelect, false);
            </script>

            

            
        </div>
    </section>
    <footer class="cms__container__footer flex-container">
        <div>
            <button class="button button_primary" id="send_button">Adicionar nova categoria</button>
            <a href="{{route('cms.home')}}" class="button button_secondary" role="button">Cancelar</a>
        </div>
        <div>
            <a class="footer__delete__disabled" role="button">Excluir Categoria</a>
        </div>
        
    </footer>
    </form>

</section>
<script>
    function sendForm(evt){
        let erros = false;

        if (document.getElementById('category-img').files.length == 0){
            alert('Envie uma imagem!')
            erros = true;
        }
        if (document.getElementById('category-name').value == ''){
            alert('Insira um nome!')
            erros = true;
        }
        if (document.getElementById('category-description').value == ''){
            alert('Insira uma descrição!')
            erros = true;
        }
        if (!erros){
            document.getElementById('category_form').submit();
        }


    }
document.getElementById('send_button').addEventListener('click', sendForm, false);
</script>
@endsection