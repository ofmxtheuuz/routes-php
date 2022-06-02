# Requisição de Rotas com PHP

Bom, uma das principais características para quem utiliza o padrão MVC nos projetos, é algum gerenciamento de Rotas.<br>
Como qualquer outro script, nós podemos fazer nosso próprio gerenciamento de rotas mas existem pacotes do composer que agiliza o projeto.<br>

<h1>O que é um gerenciador de rotas?</h1>
O gerenciador de rotas funciona de seguinte maneira (nesse projeto):<br>
O método vai requerir uma rota por parâmetro e uma função, a "rota" é uma string<br>
Para explicar melhor o que são rotas, vou dar um exemplo: "/Home" ou "/Login".<br>
Na funcão, iremos colocar o que vai acontecer caso o cliente acesse a rota.<br>

# Entrando na Prática
Antes de começarmos, caso vocês ainda não tenham entendido muita coisa, vou tentar explicar de uma forma mais "brasileira"<br>
Quando o usuário acessar a rota, a função vai ser executada...<br>

## Primeiro Passo | Instalação
Como foi dito antes, vamos utilizar o composer e o PHP, caso você não tenha eles instalados, pode instalar aqui<br>
<a href="https://getcomposer.org">Composer</a><br>
<a href="https://php.net">PHP</a><br>
Após ter instalado eles, está habito para continuar...

## Segundo Passo | Projeto
Criaremos a pasta dos projetos e logo após isso, escreva isso no terminal da sua pasta

```php
composer require coffeecode/router
```

Isso fará com que o pacote de rotas seja instalado no projeto

## Terceiro Passo | htaccess
Para esse pacote, vamos utilizar o apache e criar um arquivo na raíz do projeto com o nome ".htaccess".<br>
Dentro dele, cole isso:

```php
RewriteEngine On
Options All -Indexes

RewriteCond %{SCRIPT_FILENAME} !-f
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteRule ^(.*)$ index.php?route=/$1 [L,QSA]
```

Isso permitirá que as rotas sejam lidas sem nenhum problema

## Quarto Passo | Autoload e Instanciamento
Quando estamos falando de composer, a primeira coisa é chamar o autoload no projeto...

```php
require __DIR__ . '/vendor/autoload.php';
```

Após isso, o gerenciador de rotas já está include, agora basta informar o PHP qual a classe iremos usar, fazemos isso com

```php
use CoffeeCode\Router\Router;
```

## Quinto Passo | Iniciando com a Classe
Para criar uma instancia com a classe

```php
$Routes = new Router("URL");
```

Em "URL" você vai colocar a url padrão do seu site como: "seusite.com.br" ou simplesmente "localhost"
<br><br>
Agora, vamos anular o grupo, isso não precisa ser entendido nesse momento!

```php
$Routes->group(null);
```

## Sétimo Passo | Definindo as Rotas
Agora sim, chegou a parte mais legal! Vamos definir as rotas usando o método get:

```php
$Routes->get("/Principal", function ($data) {
    echo "Você está na página principal"
});
```

Quando o usuário acessar a URL que definimos antes mas "/Principal", irá ser executado o que está na function, nesse caso, vai exibir: "Você está na página principal"

Nesse exemplo, dei um "echo" mas você pode incluir algum arquivo por exemplo.


## Oitavo Passo | Dispatch
Esse comando serve para salvar todas as rotas que acabamos de criar, é bem simples

```php
$Routes->dispatch();
```

E agora sim, já deve estar funcionando!


## Finalização
Bom, caso tenha alguma dúvida, estou aberto pra qualquer pergunta do gênero!<br>
Repositório feito por Matheus e, um bom código a todos!
