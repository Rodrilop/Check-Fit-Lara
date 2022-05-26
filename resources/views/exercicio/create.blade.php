<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Novo Exercício
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('exercicio.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nm_exercicio" class="block font-medium text-sm text-gray-700">Exercício</label>
                            <input type="text" name="nm_exercicio" id="nm_exercicio" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nm_exercicio', '') }}" />
                            @error('nm_exercicio')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="ds_exercicio" class="block font-medium text-sm text-gray-700">Descrição</label>
                            <input type="text" name="ds_exercicio" id="ds_exercicio" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('ds_exercicio', '') }}" />
                            @error('ds_exercicio')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nm_grupo_muscular_exercicio" class="block font-medium text-sm text-gray-700">Grupo Muscular</label>
                            <input type="text" name="nm_grupo_muscular_exercicio" id="nm_grupo_muscular_exercicio" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nm_grupo_muscular_exercicio', '') }}" />
                            @error('nm_grupo_muscular_exercicio')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
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