## Requisitos

-   PHP 8.2 ou superior;
-   MySQL 8 ou superior;
-   Composer;
-   Node.js 20 ou superior;

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo ".env" as credencias do banco de dados.<br>

Instalar as dependências do PHP.

```
composer install
```

Instalar as dependências do Node.js.

```
npm install
```

Gerar a chave no arquivo .env.

```
php artisan key:generate
```

Executar as migration para criar a base de dados e as tabela.

```
php artisan migrate
```

Cadastrar registro de teste.

```
php artisan db:seed
```

Inicar o projeto criado com Laravel.

```
php artisan serve
```

Executar as bibliotecas Node.js.

```
npm run dev
```

Acessar no navegador a URL.

```
http://127.0.0.1:8000
```

## Senquencia para criar o projeto

Criar o projeto com Laravel.

```
composer create-project laravel/laravel .
```

Instalar o Breeze.

```
composer require laravel/breeze --dev
```

Publicar a autenticação, rotas, controladores, e outros recursos para a aplicação

```
php artisan breeze:install
```

-   Selecionar React com Breeze "react".
-   Selecionar recurso opcional "dark".
-   Selecionar framework para Teste "phpunit".

Executar as migration para criar a base de dados e as tabelas.

```
php artisan migrate
```

instalar as dependências no Node.js.

```
npm install
```

Executar as bibliotecas Node.js.

```
npm run dev
```

Inicar o projeto criado com Laravel.

```
php artisan serve
```

Acessar no navegador a URL.

```
http://127.0.0.1:8000
```

Criar seed.

```
php artisan make:seeder UserSeeder
```

Cadastrar registro de teste.

```
php artisan db:seed
```

## Como usar o GitHub

Verificar a versão do GIT.

```
git -v
```
