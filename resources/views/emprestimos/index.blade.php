@extends('layout')

@section('title', 'Empréstimos')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Lista de Empréstimos de livros</h2>
    <a href="{{ route('emprestimos.create') }}" class="btn btn-primary">
        ➕ Novo Empréstimo
    </a>
</div>

@if ($emprestimos->count() == 0)
    <div class="alert alert-warning">
        Nenhum empréstimo cadastrado.
    </div>
@else
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Livro</th>
            <th>Autor</th>
            <th>Pessoa</th>
            <th>Empréstimo</th>
            <th>Devolução</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($emprestimos as $emprestimo)
        <tr>
            <td>{{ $emprestimo->nome_livro }}</td>
            <td>{{ $emprestimo->autor }}</td>
            <td>{{ $emprestimo->nome_pessoa }}</td>
            <td>{{ $emprestimo->data_emprestimo }}</td>
            <td>{{ $emprestimo->data_devolucao }}</td>
            <td>
                <a href="{{ route('emprestimos.edit', $emprestimo) }}" class="btn btn-sm btn-warning">
                    ✏️ Editar
                </a>

                <form action="{{ route('emprestimos.destroy', $emprestimo) }}"
                      method="POST"
                      class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">
                        🗑️ Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection
