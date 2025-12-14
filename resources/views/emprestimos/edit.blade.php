@extends('layout')

@section('title', 'Editar Empréstimo')

@section('content')

<h2>Editar Empréstimo</h2>

<form action="{{ route('emprestimos.update', $emprestimo) }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Livro</label>
        <input type="text" name="nome_livro" class="form-control" value="{{ $emprestimo->nome_livro }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Autor</label>
        <input type="text" name="autor" class="form-control" value="{{ $emprestimo->autor }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Pessoa</label>
        <input type="text" name="nome_pessoa" class="form-control" value="{{ $emprestimo->nome_pessoa }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Data do Empréstimo</label>
        <input type="date" name="data_emprestimo" class="form-control" value="{{ $emprestimo->data_emprestimo }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Data da Devolução</label>
        <input type="date" name="data_devolucao" class="form-control" value="{{ $emprestimo->data_devolucao }}">
    </div>

    <button class="btn btn-primary">Atualizar</button>
    <a href="{{ route('emprestimos.index') }}" class="btn btn-secondary">Voltar</a>
</form>

@endsection
