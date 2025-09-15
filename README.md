Este projeto foi desenvolvido em Laravel 11, utilizando o Starter Kit como base, com autenticação pronta e layout inicial.
O objetivo foi implementar um CRUD (Create, Read, Update, Delete) de Produtos, atendendo aos requisitos definidos no trabalho.

Funcionalidades

Autenticação de usuários (login e registro).

CRUD completo de Produtos com os seguintes campos:

nome (string)

descricao (texto)

preco (decimal)

lancamento (data)

ativo (boolean)

Rotas resource protegidas por middleware auth.

Validação server-side com mensagens de erro exibidas no formulário.

Mensagens de sessão (flash) em operações de criação, atualização e exclusão.

Views Blade limpas e responsivas, utilizando TailwindCSS.

Tratamento de estado vazio na listagem.

Link de navegação no sidebar para acesso rápido ao CRUD.



Como rodar o projeto

git clone <https://github.com/MaxJulianos/api-laravel.git>
cd meu-crud

composer install

npm install

cp .env.example .env
php artisan key:generate


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=meu_crud
DB_USERNAME=root
DB_PASSWORD=root

php artisan migrate

php artisan serve
npm run dev

Para acessar o sistema, crie um usuário em /register ou use o login se já existir no banco.



