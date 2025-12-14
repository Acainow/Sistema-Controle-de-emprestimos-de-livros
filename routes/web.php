<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmprestimoController;

// Redireciona a rota raiz para /emprestimos
Route::get('/', function () {
    return redirect('/emprestimos');
});

// Rotas CRUD para empréstimos
Route::resource('emprestimos', EmprestimoController::class);

