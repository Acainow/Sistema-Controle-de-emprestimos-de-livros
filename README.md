# Sistema de Controle de Empréstimos de Livros

Aplicação web em **Laravel 12.x** para gerenciar empréstimos de livros, seguindo o padrão **CRUD**. Permite cadastrar, visualizar, editar e excluir registros de forma simples, usando **Blade Templates** e **Bootstrap 5**.

## Funcionalidades
1. Listar todos os empréstimos  
2. Cadastrar novo empréstimo  
3. Editar empréstimos existentes  
4. Excluir empréstimos  
5. Exibir mensagem quando não há empréstimos  
6. Mostrar livro e autor do empréstimo  
7. Mostrar o nome da pessoa que realizou o empréstimo  
8. Registrar data de empréstimo e devolução  
9. Botões de ação para editar e excluir  
10. Interface responsiva com Bootstrap

## Tecnologias
- **Backend:** Laravel 12.x, PHP 8.x  
- **Frontend:** Blade Templates, Bootstrap 5, CSS  
- **Banco de Dados:** MySQL  
- **Controle de Versão:** Git / GitHub

## Estrutura do Projeto
- app/Http/Controllers/EmprestimoController.php  
- resources/views/layout.blade.php  
- resources/views/emprestimos/index.blade.php  
- resources/views/emprestimos/create.blade.php  
- resources/views/emprestimos/edit.blade.php  
- routes/web.php  
- database/migrations/create_emprestimos_table.php

## Rotas Principais
As rotas CRUD para empréstimos são definidas com **Route::resource('emprestimos', EmprestimoController::class)**:

- GET `/` ou `/emprestimos` → Listar todos os empréstimos  
- GET `/emprestimos/create` → Formulário para novo empréstimo  
- POST `/emprestimos` → Salvar novo empréstimo  
- GET `/emprestimos/{id}/edit` → Editar empréstimo existente  
- PUT/PATCH `/emprestimos/{id}` → Atualizar empréstimo  
- DELETE `/emprestimos/{id}` → Excluir empréstimo  

> A rota raiz `/` exibe diretamente a lista de empréstimos, facilitando o acesso.

## Executando Localmente
1. Clone o repositório:
git clone <LINK_DO_REPOSITORIO>

2. Entre na pasta do projeto:
cd nome-do-projeto

3. Instale as dependências:
composer install

4. Copie o arquivo `.env.example` para `.env` e configure os dados do banco de dados.

5. Gere a chave do aplicativo Laravel:
php artisan key:generate

6. Rode as migrations para criar as tabelas:
php artisan migrate

7. Inicie o servidor de desenvolvimento:
php artisan serve

8. Acesse no navegador:
http://127.0.0.1:8000 ou http://127.0.0.1:8000/emprestimos

## Contribuição
Issues e Pull Requests são bem-vindos. Sinta-se à vontade para sugerir melhorias ou corrigir bugs.

## Licença
MIT License
