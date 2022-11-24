# PDW-trabalho

## Objetivo do projeto

O objetivo desta aplicação é oferecer um gerenciamento de cardápio pessoal,
oferecendo ao usuário duas funcionalidades:
- guadar links para receitas favoritas e mais comuns que ele costuma fazer;
- planejar um cardápio semanal com base nas receitas favoritas.

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
php artisan make:migration --fresh
php artisan serve
```

3. O arquivo (./PDW-Projeto/requests.html)[requests] contem uma sequência
de curls que podem ser usadas para interagir com a aplicação.
Recomendamos instalar a extensão
(https://marketplace.visualstudio.com/items?itemName=humao.rest-client)[rest-client]
para visual-studio que permite interagir com eles de forma mais automatizada.
A request de login, por exemplo, seta uma variável de ambiente com o token que é
usada nas demais requests.
