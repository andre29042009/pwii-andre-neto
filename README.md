
# pwii-andre-neto

# Como configurar o computador da escola com GitHub

  

Aulas de Programação Web II com os professores João Siles e Ricardo Palhares

Meu nome é Andre Garrido, tenho 16 anos, estou cursando o 2 ano do ensino médio com curso técnico em desenvolvimento de sistemas.

Aulas de Programação Web II com os professores João Siles e Ricardo Palhares Me chamo Artur Araujo, tenho 16 anos e curto RPG (sou mestre) e pokemon.

  

# Veja se tem alguma conta conectada no GitBash

  

- git config --list

  

## Para remover alguma conta que esteja conectada

  

- git config --global --unset-all user.email

- git config --global --unset-all user.name

  

# Para adicionar uma conta no GitBash

  

- git config --global user.name "Seu UserName"

- git config --global user.email Seu Email

  

# Como copiar a URL do seu repositório

Entre nos seus repositórios no github, escolha o que você quer clonar e clique no mesmo, após isso, clique no botão "<> code" que está verde, e clique ao lado do link para copiar o URL do seu repositório.

# Para clonar o repositório

  

- git clone (shift+insert)

  

# Para salvar os arquivos (após terminar de edita-los)

  

- git add .

  

# Para deixar um comentário

  

- git commit -m "Comentário"

  

# Para subir no GitHub

  

- cd (Nome da Pasta)

- ls

- git status

# Como instalar o Laravel

## Instale o Laravel via Composer

Bash

    composer create-project laravel/laravel nome-do-projeto

## Criar um projeto 

    laravel new nome-do-projeto

## Rodar o Servidor de Desenvolvimento

    cd nome-do-projeto
    hp artisan serve

## Rodar o Projeto Laravel

Navegue até a pasta do projeto:

    cd nome-do-projeto
Inicie o servidor local:

    php artisan serve
Acesse no navegador:

    http://127.0.0.1:8000

## Estrutura Básica de Pastas

|Pasta|O que tem  |
|--|--|
| routes/ |Onde você define as rotas|
|app/Http/Controllers/|Lógica dos controladores (regras)|
|resources/views/|Arquivos de visualização (Blade templates)
|app/Models/|Modelos da aplicação (representam tabelas)|
|database/migrations/|Scripts de criação de tabelas|

## Criar uma Rota Simples
Abra o arquivo:

    routes/web.php
Adicione no php:

    use Illuminate\Support\Facades\Route;Route:
    :get('/hello', function () {
    return 'Olá, Laravel!';
    });
    
Acesse: `http://localhost:8000/hello`

## Criar um Controller

Php

    php artisan make:controller MeuController
    
No arquivo criado (`app/Http/Controllers/MeuController.php`), adicione:

    <?php 
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    class MeuController extends Controller
    {
      public function index()
      {
       return 'Olá do controller!';
      }
     }
     
  Depois, crie uma rota que usa esse controller:
  

    Route::get('/meu-controller', [MeuController::class, 'index']);

## Criar uma View (HTML com Blade)

No arquivo `routes/web.php`:

    Route::get('/bemvindo', function () {
    return view('bemvindo');
    });

Crie o arquivo de view em: `resources/views/bemvindo.blade.php`

 

    <!DOCTYPE html>
    <html>
    <head>
	    <title>Bem-vindo</title>
    </head>
    <body>
       <h1>Olá, este é um site em Laravel!</h1>
    </body>


