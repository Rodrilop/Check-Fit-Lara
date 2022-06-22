<x-app-layout>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-validation-errors class="mb-4" />
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('treino.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nome" class="block font-medium text-sm text-gray-700">Nome</label>
                            <input type="text" name="nome" id="nome" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nome', '') }}" />

                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="repeticao" class="block font-medium text-sm text-gray-700">Repetição</label>
                            <input type="text" name="repeticao" id="repeticao" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('repeticao', '') }}" />

                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="carga" class="block font-medium text-sm text-gray-700">Carga</label>
                            <input type="text" name="carga" id="carga" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('carga', '') }}" />

                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="duracao" class="block font-medium text-sm text-gray-700">Duração</label>
                            <input type="text" name="duracao" id="duracao" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('duracao', '') }}" />

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