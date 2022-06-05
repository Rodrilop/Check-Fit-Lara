<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Novo Alimento
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-jet-validation-errors class="mb-4" />
        <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('alimento.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <x-jet-label for="categoria" value="{{ __('Categoria') }}" />
                        <select id="categoria" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="categoria" :value="old('categoria')" required>
                            <option disabled  selected>Selecione a Categoria</option>
                            <option value="Frutas">Frutas</option>
                            <option value="Verduras">Verduras</option>
                        </select>

                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="alimento" class="block font-medium text-sm text-gray-700">Alimento</label>
                            <input type="text" name="alimento" id="alimento" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('alimento', '') }}" />

                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="descricao" class="block font-medium text-sm text-gray-700">Descrição</label>
                            <input type="text" name="descricao" id="descricao" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('descricao', '') }}" />

                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>