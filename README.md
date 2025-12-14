DESCRIÇÃO
Aplicação web em Laravel para gerenciar empréstimos de livros, seguindo o padrão CRUD. Permite cadastrar, visualizar, editar e excluir registros de forma simples, usando Blade Templates e Bootstrap

FUNCIONALIDADES
1-Listar todos os empréstimos
2-Cadastrar novo empréstimo
3-Editar empréstimos existentes
4-Excluir empréstimos
5-Exibir mensagem quando não há empréstimos
6-Mostrar livro e autor do empréstimo
7-Mostrar o nome da pessoa que realizou o empréstimo
8-Registrar data de empréstimo e devolução
9-Botões de ação para editar e excluir
10-Interface responsiva com Bootstrap

TECNOLOGIAS

Backend: Laravel 12.x
Frontend: Blade Templates e Bootstrap 5
Banco de Dados: MySQL
Controle de Versão: Git / GitHub

ESTRUTURA DO PROJETO

app/Http/Controllers/EmprestimoController.php
resources/views/layout.blade.php
resources/views/emprestimos/index.blade.php
resources/views/emprestimos/create.blade.php
resources/views/emprestimos/edit.blade.php
routes/web.php
database/migrations/create_emprestimos_table.php

ROTAS PRINCIPAIS

Route::resource('emprestimos', EmprestimoController::class)

GET /emprestimos → Listar empréstimos
GET /emprestimos/create → Formulário para novo empréstimo
POST /emprestimos → Salvar empréstimo
GET /emprestimos/{id}/edit → Editar empréstimo
PUT/PATCH /emprestimos/{id} → Atualizar empréstimo
DELETE /emprestimos/{id} → Excluir empréstimo

EXECUTANDO LOCALMENTE

git clone <LINK_DO_REPOSITORIO>
cd nome-do-projeto
composer install
copiar .env.example para .env e configurar o banco
php artisan key:generate
php artisan migrate
php artisan serve

Acesse no navegador: http://127.0.0.1:8000/emprestimos

CONTRIBUIÇÃO
Issues e pull requests são bem-vindos

LICENÇA
MIT License
