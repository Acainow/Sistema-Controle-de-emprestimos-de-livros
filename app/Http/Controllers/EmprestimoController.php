<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    public function index()
    {
        $emprestimos = Emprestimo::all();
        return view('emprestimos.index', compact('emprestimos'));
    }

    public function create()
    {
        return view('emprestimos.create');
    }

    public function store(Request $request)
    {
        Emprestimo::create($request->all());
        return redirect()->route('emprestimos.index');
    }

    // 🔽 EDITAR
    public function edit(Emprestimo $emprestimo)
    {
        return view('emprestimos.edit', compact('emprestimo'));
    }

    // 🔄 ATUALIZAR
    public function update(Request $request, Emprestimo $emprestimo)
    {
        $emprestimo->update($request->all());
        return redirect()->route('emprestimos.index');
    }

    // 🗑️ EXCLUIR
    public function destroy(Emprestimo $emprestimo)
    {
        $emprestimo->delete();
        return redirect()->route('emprestimos.index');
    }
}
