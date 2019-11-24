# Desafio Symfony - CRUD de Empresas e Sócios

### Especificações principais

* [Symfony] - v4.2.0 - Framework
* [PHP] - v7.3.11 - Linguagem de Programação

### Instalação

Execute as seguintes etapas:

Abra o arquivo 'quadro_societario/.env'.
Ajuste a variavel DATABASE_URL as configurações já feitas.

Se você for utilizar o postgre use:
DATABASE_URL=pgsql://USERDOBANCO:SENHADOBANCO@127.0.0.1:5432/NOMEDOBANCO

Se você for utilizar o mysql use:
DATABASE_URL=mysql://USERDOBANCO:SENHADOBANCO@127.0.0.1:3306/NOMEDOBANCO

Logo em seguida, entre no diretório do projeto e rode os comandos abaixo para instalar as demais dependências e criar as tabelas no banco de dados:
```sh
$ cd quadro_societario
$ composer install
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migrations:diff
$ php bin/console doctrine:migrations:migrate
```
Para rodar o projeto:
```sh
$ php bin/console server:run
```
```sh
$ OU php symfony server:start
```
