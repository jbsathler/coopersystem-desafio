# Desafio CooperSystem

----
## Instruções de instalação:

 - Clonar o repositório:
    `git clone jbsathler/coopersystem-desafio`

 - Acessar o diretório do projeto:
    `cd coopersystem-desafio`

 - criar o arquivo .env a partir do exemplo:
    `cp .env.example .env`

 - editar o arquivo .env para informar os parâmetros do banco de dados a ser utilizado:
    `vi .env`

 - executar a instalação de dependências via Composer:
    `composer install`

 - Gerar chave única para a aplicação:
    `php artisan key:generate`

 - Executar as migrations do banco:
    `php artisan migrate`

 - Levantar o servidor de desenvolvimento:
    `php artisan serve`

----
## Instruções de uso:

 - Acessar pelo navegador o endereço informado ao levantar o servidor (ex: http://127.0.0.1:8000/);
 - Caso seja o primeiro uso da aplicação, registrar um usuário;
 - Logar com o usuário registrado;
 - Cadastrar os produtos na primeira opção do menu a esquerda: "Produtos";
 - Uma vez que haja produtos cadastrados, cadastrar pedidos na segunda opção do menu a esquerda: "Pedidos";

----
**Candidato**: [Jaderson Barreto Sathler](https://jbsathler.github.io/)
