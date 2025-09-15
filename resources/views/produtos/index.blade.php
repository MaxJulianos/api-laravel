<x-layouts.app>
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold">Produtos</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">Lista de produtos</p>
        </div>
        <a href="{{ route('produtos.create') }}"
           class="inline-flex items-center px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700">
            Novo Produto
        </a>
    </div>

    @if($produtos->count() === 0)
        <div class="p-6 bg-white dark:bg-gray-800 rounded-md border border-gray-200 dark:border-gray-700">
            <p class="text-gray-700 dark:text-gray-300">Nenhum produto cadastrado ainda.</p>
        </div>
    @else
        <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-md border border-gray-200 dark:border-gray-700">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-50 dark:bg-gray-900/30">
                <tr>
                    <th class="px-4 py-3 text-left">Nome</th>
                    <th class="px-4 py-3 text-left">Preço</th>
                    <th class="px-4 py-3 text-left">Lançamento</th>
                    <th class="px-4 py-3 text-left">Ativo</th>
                    <th class="px-4 py-3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-4 py-3">{{ $produto->nome }}</td>
                        <td class="px-4 py-3">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                        <td class="px-4 py-3">{{ $produto->lancamento->format('d/m/Y') }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 text-xs rounded {{ $produto->ativo ? 'bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-300' : 'bg-gray-100 text-gray-700 dark:bg-gray-700/60 dark:text-gray-300' }}">
                                {{ $produto->ativo ? 'Sim' : 'Não' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('produtos.show', $produto) }}" class="underline">Ver</a>
                            <a href="{{ route('produtos.edit', $produto) }}" class="underline">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Excluir este produto?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="underline text-red-600">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $produtos->links() }}
        </div>
    @endif
</x-layouts.app>
