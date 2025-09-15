@php
    // valor padrão para checkbox
    $ativoChecked = old('ativo', (int) $produto->ativo) ? true : false;
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    {{-- Nome --}}
    <div>
        <label for="nome" class="block text-sm font-medium text-gray-800 dark:text-gray-200 mb-1">
            Nome <span class="text-red-600">*</span>
        </label>
        <input
            id="nome"
            type="text"
            name="nome"
            value="{{ old('nome', $produto->nome) }}"
            placeholder="Ex.: Caderno de Anotações"
            class="w-full rounded-md border border-gray-300 dark:border-gray-600
                   bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100
                   placeholder-gray-400 dark:placeholder-gray-500
                   px-3 py-2 shadow-sm focus:outline-none
                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                   @error('nome') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
            required
        >
        @error('nome')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Preço --}}
    <div>
        <label for="preco" class="block text-sm font-medium text-gray-800 dark:text-gray-200 mb-1">
            Preço <span class="text-red-600">*</span>
        </label>
        <div class="relative">
            <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 dark:text-gray-400">R$</span>
            <input
                id="preco"
                type="number"
                step="0.01"
                min="0"
                name="preco"
                value="{{ old('preco', $produto->preco) }}"
                placeholder="0,00"
                class="w-full rounded-md border border-gray-300 dark:border-gray-600
                       bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100
                       placeholder-gray-400 dark:placeholder-gray-500
                       pl-10 pr-3 py-2 shadow-sm focus:outline-none
                       focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                       @error('preco') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                required
            >
        </div>
        @error('preco')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Lançamento --}}
    <div>
        <label for="lancamento" class="block text-sm font-medium text-gray-800 dark:text-gray-200 mb-1">
            Lançamento <span class="text-red-600">*</span>
        </label>
        <input
            id="lancamento"
            type="date"
            name="lancamento"
            value="{{ old('lancamento', optional($produto->lancamento)->format('Y-m-d')) }}"
            class="w-full rounded-md border border-gray-300 dark:border-gray-600
                   bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100
                   px-3 py-2 shadow-sm focus:outline-none
                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                   @error('lancamento') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
            required
        >
        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Formato: dia/mês/ano</p>
        @error('lancamento')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Ativo --}}
    <div class="flex items-center gap-3 mt-7">
        <input type="hidden" name="ativo" value="0">
        <input
            id="ativo"
            type="checkbox"
            name="ativo"
            value="1"
            {{ $ativoChecked ? 'checked' : '' }}
            class="h-5 w-5 rounded border-gray-300 dark:border-gray-600
                   text-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
        <label for="ativo" class="text-sm text-gray-800 dark:text-gray-200 select-none">Ativo</label>
        @error('ativo')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Descrição --}}
    <div class="md:col-span-2">
        <label for="descricao" class="block text-sm font-medium text-gray-800 dark:text-gray-200 mb-1">
            Descrição <span class="text-red-600">*</span>
        </label>
        <textarea
            id="descricao"
            name="descricao"
            rows="6"
            placeholder="Detalhe o produto: material, tamanho, observações…"
            class="w-full rounded-md border border-gray-300 dark:border-gray-600
                   bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100
                   placeholder-gray-400 dark:placeholder-gray-500
                   px-3 py-2 shadow-sm focus:outline-none
                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                   @error('descricao') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
            required>{{ old('descricao', $produto->descricao) }}</textarea>
        @error('descricao')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>
