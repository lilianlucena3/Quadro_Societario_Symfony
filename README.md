# Desafio Symfony - CRUD de Empresas e Sócios

### Especificações principais

* [Symfony](https://symfony.com/4) - v4.2.0 - Framework
* [PHP](https://secure.php.net/) - v7.3.11 - Linguagem de Programação

### Instalação

Execute as seguintes etapas:

Abra o arquivo 'qua_societario/.env'.
Ajuste a variavel DATABASE_URL as configurações já feitas.

DATABASE_URL=pgsql://postgres:SENHADOBANCO@127.0.0.1:5432/NOMEDOBANCO

Logo em seguida, entre no diretório do projeto e rode os comandos abaixo para instalar as demais dependências e criar as tabelas no banco de dados:
```sh
$ cd quadro_societario
$ composer install
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migrations:diff
$ php bin/console doctrine:migrations:migrate
```

E para rodar o projeto:
```sh
$ php bin/console server:run
```

### Rotas
Estas são as rodas para uso deste webservice:
#### Empresas:
| Função | Rota | Parametro | Tipo |
| ------ | ------ | ------ | ------ |
| Empresa - Listar Todas | /empresas/listar | x | GET
| Empresa - Cadastrar | /empresas/criar | x | POST/GET
| Empresa - Editar | /empresas/editar/{nuSeqEmpresa} | ID da Empresa | POST/GET
| Empresa - Remover | /empresas/baixar/{nuSeqEmpresa} | ID da Empresa | DELETE
| Empresa - Exibir | /empresas/{nuSeqEmpresa} | ID da Empresa | GET

#### QSA:
| Função | Rota | Parametro | Tipo |
| ------ | ------ | ------ | ------ |
| Sócio - Listar Todos | /pessoas/listar | x | GET
| Sócio - Cadastrar | /pessoas/criar | x | POST/GET
| Sócio - Editar | /pessoas/editar/{nuSeqPessoa} | ID do Sócio | POST/GET
| Sócio - Remover | /pessoas/deletar/{nuSeqPessoa} | ID do Sócio | DELETE
| Sócio - Exibir | /pessoas/{nuSeqPessoa} | ID do Sócio | GET
