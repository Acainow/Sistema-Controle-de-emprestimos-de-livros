<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_livro',
        'autor',
        'nome_pessoa',
        'data_emprestimo',
        'data_devolucao'
    ];
}
