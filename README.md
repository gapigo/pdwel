# pdwel
Repositório para entregar o projeto final da disciplina eletiva programação dinâmica para web.

# Participantes
| Nome             | Prontuário |
| ---------------- | ---------- |
| Gabriel Pinheiro | sp3013456  |
| Camila Lopez     | SP302427X  |
| Fernando Sousa   | SP3017061  |

# Contexto da aplicação
A nossa aplicação é um fórum de FreeLancer e compartilhamento de experiências com um blog. Ela simula o sistema da disciplina PDWEL do Moodle e em conjunto fornece uma ferramenta para os programadores divulgarem seus contatos para projetos freelancers. A marca WebsiteDiary é meramente ilustrativa.

# Créditos
- [Geração da logomarca](https://namelix.com/app/?keywords=blog+webservice)
- [Beer and Code - Laravel do Zero](https://www.youtube.com/watch?v=eiYfQzDLyeY&list=PL7ScB28KYHhHEC8DGfhDt7WdHe7s6A56J) (Obs: O projeto é um "fork" desse material, mas a maior parte do conteúdo foi desenvolvido pelos alunos)
- [MMPX - Design do Front](http://mmpx.com.br/)


# Como rodar
**ATENÇÃO!** Antes de prosseguir com as seguintes etapas, copie o arquivo **.env.example** e cole um novo como **.env**. Se atente com o seguinte bloco:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projeto
DB_USERNAME=root
DB_PASSWORD=
```

## Pre-dependências
1. Instale o [composer](https://getcomposer.org/doc/00-intro.md#installation-windows)
2. Rode dentro dentro de um terminal, no diretório do projeto, o comando para instalar as dependências.
```shell
composer install
``` 
3. Garanta que o [Git LFS](https://git-lfs.github.com/) esteja instalado para ser capaz baixar o banco sqlite
4. Instale o pacote "Auth" do laravel com
```shell
composer require laravel/ui
``` 


## Como rodar no xampp
1. Instale o [Xampp](https://www.apachefriends.org/pt_br/download.html) com a versão 8 do php
2. Copie e cole o projeto no repositório `C:\xampp\htdocs\`
3. Edite o arquivo `C:\xampp\apache\conf\extra\httpd-vhosts.conf` e adicione no fim do arquivo:
```xml
<VirtualHost projeto.loc:80>
    DocumentRoot "C:\xampp\htdocs\[caminho_ate_a_raiz_do_projeto]\public"
</VirtualHost>
```
4. Configure o arquivo hosts do windows ([Como editar o arquivo hots do windows](https://tecnoblog.net/199539/editar-arquivo-hosts-windows/)) e adicione ao fim do arquivo a seguinte linha:
```shell
127.0.0.1 projeto.loc
```
5. Inicie o navegador e use a URL `projeto.loc/`

## Como rodar pelo laravel
1. Pelo composer, instale o [laravel](https://laravel.com/docs/8.x/installation#installation-via-composer)

2. Agora rode o projeto com o seguinte comando:
```shell
php artisan serve
```
3. Caso a etapa 2 falhe, garanta que o php esteja na variável de ambiente do windows
	1. Coloque na barra de pesquisa *"variáveis"* e entre em *"Editar as variáveis de ambiente do sistema"*.
	2. Nas variáveis de usuário, selecione a variável "Path" e clique em editar
	3. Clique em novo e cole a seguinte linha: `C:\xampp\php`
	4. Dê OK, salve tudo e tente o comando da etapa 4. novamente
4.  Abra no navegador o projeto pelo link fornecido pelo laravel. O padrão é: http://127.0.0.1:8000
