# Teste Técnico PJBank

Projeto criado com [CakePHP](https://cakephp.org) 4.x.

## Instalação

1- Baixe o projeto

2- Verifique se os [requisitos](https://book.cakephp.org/4/en/installation.html) do CakePHP estão sendo atendidos.  Não esqueça de instalar a extensão PHP do SGBD que você usará ;)

3- Instale as dependências
```bash
composer install
```
4- Crie o Banco de Dados no seu SGBD.

5- Altere no arquivo `config/app.php` os dados de conexão com o BD. Busque pela propriedade `Datasources`.
A [documentação](https://book.cakephp.org/4/en/quickstart.html#database-configuration) do CakePHP é uma boa ajuda nessa parte.

6- Execute as migrations do BD
```bash
php bin/cake.php migrations migrate
```

## Execução da aplicação

Execute no terminal: 
```bash
php bin/cake.php server
```

A aplicação estará disponível em `http://localhost:8765`


# Principais arquivos de cada exercício

## Exercício 1

Model
`src/Model/Table/UsersTable.php`
`src/Model/Entity/user.php`

Controller
`src/Controller/UsersController.php`

View
`templates/Users/index.php`
`templates/Users/add.php`
`templates/Users/edit.php`

## Exercício 2

Controller
`src/Controller/PagesController.php`

View
`templates/Pages/manipulando_array.php`

## Exercício 3

Controller
`src/Controller/PagesController.php`

View
`templates/Pages/dml.php`

## Outros arquivos

Home
`templates/Pages/home.php`

Flash
`templates/element/flash/error.php`