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
