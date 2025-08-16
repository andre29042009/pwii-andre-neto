
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

# Como criar um projeto Laravel
## Instalando o PHP, Composer e o Laravel no PC
Execute o PowerShell como administrador e cole o seguinte comando:

    Set-ExecutionPolicy Bypass  -Scope  Process  -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor  3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
Aguarde toda a instalação.
Agora instale o Laravel:

    composer global  require  laravel/installer

## Criando um projeto
Antes de criar o projeto, dê cd onde voce deseja criar o projeto:

    cd lugardoprojeto

Crie um projeto:

    laravel new  example-app

 - Irá aparecer uma mensagem se você deseja começar com algum kit, escreva "none". Use sqlite.
 
`cd nome-projeto`
`npm install && npm run  build`
`composer run  dev`

## Gerando uma chave de aplicação

 - Abra o projeto no VSCode, em seguida, entre no arquivo chamado .env.
  - Se não houver nenhum arquivo, copie e cole o arquivo chamado .env.example
  -  Em seguida, troque o nome do arquivo que você copiou para .env 
  - Agora entre no arquivo .env e veja se tem alguma chave em: APP_KEY=
  - Se não tiver nada, faça o seguinte:

Abra o powershell e execute o seguinte código:

`php artisan key:generate`

Copie o código que for gerado e cole no APP_KEY= codigoaleatorio




