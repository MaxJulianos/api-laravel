<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::latest()->paginate(10);

        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $produto = new Produto();
        return view('produtos.create', compact('produto'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'       => ['required', 'string', 'max:255'],
            'descricao'  => ['required', 'string'],
            'preco'      => ['required', 'numeric', 'min:0'],
            'lancamento' => ['required', 'date'],
            'ativo'      => ['required', 'boolean'],
        ]);

        Produto::create($data);

        return redirect()
            ->route('produtos.index')
            ->with('status', 'Produto criado com sucesso!');
    }

    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $data = $request->validate([
            'nome'       => ['required', 'string', 'max:255'],
            'descricao'  => ['required', 'string'],
            'preco'      => ['required', 'numeric', 'min:0'],
            'lancamento' => ['required', 'date'],
            'ativo'      => ['required', 'boolean'],
        ]);

        $produto->update($data);

        return redirect()
            ->route('produtos.index')
            ->with('status', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()
            ->route('produtos.index')
            ->with('status', 'Produto excluído com sucesso!');
    }
}
