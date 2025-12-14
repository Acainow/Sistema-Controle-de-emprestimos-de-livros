<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmprestimoController;

Route::resource('emprestimos', EmprestimoController::class);
