@extends('layout')

@section('title', 'Novo Empréstimo')

@section('content')

<h2>Novo Empréstimo</h2>

<form action="{{ route('emprestimos.store') }}" method="POST" class="card p-4 shadow-sm">
    @csrf

    <div class="mb-3">
        <label class="form-label">Livro</label>
        <input type="text" name="nome_livro" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Autor</label>
        <input type="text" name="autor" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Pessoa</label>
        <input type="text" name="nome_pessoa" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Data do Empréstimo</label>
        <input type="date" name="data_emprestimo" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Data da Devolução</label>
        <input type="date" name="data_devolucao" class="form-control">
    </div>

    <button class="btn btn-success">Salvar</button>
    <a href="{{ route('emprestimos.index') }}" class="btn btn-secondary">Voltar</a>
</form>

@endsection
