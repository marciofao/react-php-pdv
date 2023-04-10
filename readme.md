#PDV-PHP-REACT

#Tecnologias:
-PHP

-PostgreSQL

-ReactJS

-PHPUnit

#Build

-Necessário ter instalado PostgreSQL

#Banco de dados

- Dump do banco incluido no arquivo `pdv.dump`

Detalhes de configuração do banco de dados são configurados no arquivo `config.php`

O projeto utiliza composer, antes de iniciar é necessário rodar:
`composer install`

Build do frontend está incluido no repo.
Para iniciar o backend rodar no terminal(na raiz da aplicação): `php -S localhost:8080`

#Testes

Testes podem ser executados no PHPUnit com o comando no terminal na pasta raiz do projeto:

`./vendor/bin/phpunit tests`
