# PDW-trabalho

## Objetivo do projeto

O objetivo desta aplicação é oferecer um gerenciamento de cardápio pessoal,
oferecendo ao usuário duas funcionalidades:
- guadar links para receitas favoritas e mais comuns que ele costuma fazer;
- planejar um cardápio semanal com base nas receitas favoritas.

Pré-requisitos:
- Ter o laravel, composer e o XAMPP instalado.

Configuração da aplicação laravel:

- Inicie o Apache e o MySQL no XAMPP
- Clone o repositório com o comando git clone https://github.com/amandaqcarreiro/PDW-trabalho.git
- Abra a pasta clonada no VSCode e no terminal dele rode o comando composer install para instalar as dependências, caso dê erro rode o composer install --ignore-platform-req=ext-fileinfo
- Renomeie o arquivo .env.example para .env
- Suba a aplicação com o comando php artisan serve

Assim, uma vez feito o _signup_ e o _login_, é possível usar a API para manter
o registro conforme o especificado.

## Execução

Para executar o projeto, assumindo que o php e Laravel estejam instalados:
1. crie um usuário e um schema no banco mysql, com nome e senha:
```
nome: receitineas
senha: receitineas
schema: pdw_trabalho
```

2. Execute os seguintes comandos para criar as tabelas e rodar a aplicação:
```
php artisan migrate:fresh
php artisan serve
```

3. O arquivo (./PDW-Projeto/requests.html)[requests] contem uma sequência
de curls que podem ser usadas para interagir com a aplicação.
Recomendamos instalar a extensão
(https://marketplace.visualstudio.com/items?itemName=humao.rest-client)[rest-client]
para visual-studio que permite interagir com eles de forma mais automatizada.
A request de login, por exemplo, seta uma variável de ambiente com o token que é
usada nas demais requests.

4. Para verificar a documentação das APIs basta subir a aplicação com o comando PHP artisan serve
e acessar a URL: http://127.0.0.1:8000/docs
