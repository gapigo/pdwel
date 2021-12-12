@extends('layouts.cms')

@section('title')
Editar post
@endsection

@section('css')
{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script src="https://cdn.tiny.cloud/1/u5yci7u2lbwyacv3u3rq69xep7snw52w939mh6mnqlvhoq7w/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    function myCustomInitInstance(){tinymce.activeEditor.setContent(`{!! htmlspecialchars_decode($post->content) !!}`)}
    tinymce.init({
        selector: 'textarea',
        plugins:'link code',
        init_instance_callback : myCustomInitInstance,
        menubar: false
    });

</script>
@endsection

@section('content')
<header class="common-header">
    <div class="pattern__header"></div>
</header>

<div class="gray-background-fixed"></div>

<section class="cms__container main-wrapper">
    <header class="cms__container__header">
        <ul class="cms__container__header__tabs">
            <li><a href="cms-home.php">Categorias e produtos</a></li>
            <li><a href="cms-blog-new-post.php" class="tab__active">Gerenciar blog</a></li>
        </ul>
    </header>
    <section class="cms__container__content">
        <form id="blog_form" action="{{route('cms.update.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="split__container">
                <h2 class="title-small">Nova postagem</h2>
                <p>Preencha os campos abaixo para publicar um novo post</p>
                <input type="hidden" name="id" value="{{$post->id}}">
                <label for="post-title">Titulo da postagem</label>
                <input id="post-title" type="text" name="title" tabindex="1" required autofocus placeholder="Ex: Novo produto"
                value="{{$post->title}}">
    
                <span class="label">Imagem de capa</span>
                <label for="post-cover-img" class="button add_new">Clique para adiconar imagem de capa</label>
                <input id="post-cover-img" value="Clique para adiconar imagem de capa" type="file" name="image" tabindex="2" multiple  accept="image/png, image/jpeg" required>
                <output id="list"></output>
                <script>
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

                    document.getElementById('post-cover-img').addEventListener('change', handleFileSelect, false);
                </script>
            </div>
    
            <hr class="thin_divider_overlap">
    
            <div class="split__container">
                <h2 class="title-small">Conteúdo</h2>
                <p>Preencha o conteudo da postagem</p>
    
                <label for="paragraphy-1">Parágrafo</label>
                <textarea id="paragraphy-1" name="content" cols="30" rows="9" required tabindex="3" placeholder="Ex: O PHP Laravel é um framework poderoso"></textarea>
    
                <hr class="thin_divider">
    
                {{-- <div class="blog__toolbar">
                    <div class="blog__toolbar__container">
                        <button data-modal="gallery" class="trigger blog__toolbar__button"><img src="./images/toolbar/toolbar-gallery.svg" alt="">Galeria</button>
                        <button data-modal="image" class="trigger blog__toolbar__button"><img src="./images/toolbar/toolbar-image.svg" alt="">Imagem</button>
                        <button data-modal="video" class="trigger blog__toolbar__button"><img src="./images/toolbar/toolbar-video.svg" alt="">Vídeo</button>
                        <button class="blog__toolbar__button"><img src="./images/toolbar/toolbar-title.svg" alt="">Título</button>
                        <button class="blog__toolbar__button"><img src="./images/toolbar/toolbar-paragraph.svg" alt="">Parágrafo</button>
                    </div>
                </div> --}}
            </div>
        
    </section>


    <div class="cms__container__footer flex-container">
        <div>
            {{-- <button class="button" role="button" type="submit">Publicar nova postagem</button> --}}
            <button class="button button_primary" id="send_button">Alterar Postagem</button>
            <a href="{{route('cms.home')}}" class="button" role="button">Cancelar</a>
        </div>
        
        <div>
            {{-- <a id="footer__delet" class="footer__delete" role="button">Excluir postagem</a> --}}
            {{-- {{ Form::open(['url' => 'foo/bar', 'method' => 'delete', 'class' => 'deleteForm']) }} --}}
                {{-- <input type="submit" class="deleteBtn" /> --}}
                {{-- <form action="{{route('cms.delete.post', ['post' => $post])}}" method="delete"> --}}
                    {{-- <input id="footer__deleta" class="footer__delete" type="submit">Excluir postagem</input> --}}
                    {{-- <input type="submit" value="Excluir postagem" class="footer__delete"> --}}
                    {{-- <a id="footer__deleta" class="footer__delete" role="button">Excluir postagem</a> --}}
                {{-- </form> --}}
                <a href="{{route('cms.delete.post', ['post' => $post])}}" class="footer__delete" role="button">Excluir postagem</a>
            {{-- {{ Form::close() }} --}}
        </div>
        <script>
            function cleanPreview(){
                let preview = document.getElementById('list').children;
                for(let i = preview.length - 1; i >= 0; i--)
                    preview[i].remove();
            }
            function limparCampos (evt) {
            
            // Limpa o titulo
            document.getElementById('post-title').value = '';

            // Limpa os arquivos
            document.getElementById('post-cover-img').value= null;
            
            // Limpa o preview de imagens
            cleanPreview();

            // Limpa a área de texo
            tinyMCE.activeEditor.setContent('');
            }
            function sendForm(evt){
                let content = tinyMCE.activeEditor.getContent();
                document.getElementById('paragraphy-1').value = content;
                let erros = false;
                if (document.getElementById('paragraphy-1').value == ''){
                    alert('Escreva algo no parágrafo!')
                    erros = true;
                }
                if (document.getElementById('post-cover-img').files.length == 0){
                    alert('Envie uma imagem!')
                    erros = true;
                }
                if (document.getElementById('post-title').value == ''){
                    alert('Coloque um título!')
                    erros = true;
                }
                if (!erros){
                    document.getElementById('blog_form').submit();
                }


            }

            document.getElementById('footer__delet').addEventListener('click', limparCampos, false);
            document.getElementById('send_button').addEventListener('click', sendForm, false);
        </script>
    </div>
    </form>
</section>

<script>
    function carregarImagem () {
        const span = document.createElement('span');
        const src = `{{$image_url}}`;
        span.innerHTML = 
        `<img style="height: 75px; border: 1px solid #000; margin: 5px"` + 
        `src="${src}" title="{{$post->image"}}>`;

        document.getElementById('list').insertBefore(span, null);
    }

    document.onload = carregarImagem();
</script>
{{-- 
<script>
const addArticle = (ele, data) => {
    data = data.split("\n").filter(item => item.length);
    // console.log(data);

    data.forEach(item => {
        // check for heading
        if(item[0] == '#'){
            let hCount = 0;
            let i = 0;
            while(item[i] == '#'){
                hCount++;
                i++;
            }
            let tag = `h${hCount}`;
            ele.innerHTML += `<${tag}>${item.slice(hCount, item.length)}</${tag}>`
        } 
        //checking for image format
        else if(item[0] == "!" && item[1] == "["){
            let seperator;

            for(let i = 0; i <= item.length; i++){
                if(item[i] == "]" && item[i + 1] == "(" && item[item.length - 1] == ")"){
                    seperator = i;
                }
            }

            let alt = item.slice(2, seperator);
            let src = item.slice(seperator + 2, item.length - 1);
            ele.innerHTML += `
            <img src="${src}" alt="${alt}" class="article-image">
            `;
        }

        else{
            ele.innerHTML += `<p>${item}</p>`;
        }
    })
}
</script> --}}
@endsection

