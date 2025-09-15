<x-layouts.app>
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Detalhes do Produto</h1>
        <a href="{{ route('produtos.index') }}" class="underline">Voltar</a>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-md border border-gray-200 dark:border-gray-700 space-y-4">
        <p><span class="font-semibold">Nome:</span> {{ $produto->nome }}</p>
        <p><span class="font-semibold">Preço:</span> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        <p><span class="font-semibold">Lançamento:</span> {{ $produto->lancamento->format('d/m/Y') }}</p>
        <p><span class="font-semibold">Ativo:</span> {{ $produto->ativo ? 'Sim' : 'Não' }}</p>
        <div>
            <p class="font-semibold">Descrição:</p>
            <p class="mt-1 whitespace-pre-line">{{ $produto->descricao }}</p>
        </div>
    </div>
</x-layouts.app>
