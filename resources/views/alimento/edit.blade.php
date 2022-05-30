<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Alimento
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('alimento.update', $alimento->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id" class="block font-medium text-sm text-gray-700">ID</label>
                            <input type="text" name="id" id="id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id', $alimento->id) }}" />
                            @error('id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                        <x-jet-label for="nm_categoria_alimento" value="{{ __('Categoria') }}" />
                        <select id="nm_categoria_alimento" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="nm_categoria_alimento" :value="old('nm_categoria_alimento')" required>
                            <option selected>{{ old('nm_categoria_alimento', $alimento->nm_categoria_alimento) }}</option>
                                <option value="Frutas">Frutas</option>
                                <option value="Verduras">Verduras</option>
                        </select>
                        @error('nm_categoria_alimento')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nm_alimento" class="block font-medium text-sm text-gray-700">Alimento</label>
                            <input type="text" name="nm_alimento" id="nm_alimento" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nm_alimento', $alimento->nm_alimento) }}" />
                            @error('nm_alimento')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="ds_alimento" class="block font-medium text-sm text-gray-700">Descrição</label>
                            <input type="text" name="ds_alimento" id="ds_alimento" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('ds_alimento', $alimento->ds_alimento) }}" />
                            @error('ds_alimento')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>                        
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Editar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>