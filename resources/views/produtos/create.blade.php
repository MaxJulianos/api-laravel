<x-layouts.app>
    <div class="mb-6">
        <h1 class="text-2xl font-bold">Novo Produto</h1>
    </div>

    <form action="{{ route('produtos.store') }}" method="POST"
          class="bg-white dark:bg-gray-800 p-6 rounded-md border border-gray-200 dark:border-gray-700">
        @csrf
        @include('produtos._form')

        <div class="mt-6 flex gap-2">
            <button class="px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700">Salvar</button>
            <a href="{{ route('produtos.index') }}" class="px-4 py-2 rounded-md border">Cancelar</a>
        </div>
    </form>
</x-layouts.app>
