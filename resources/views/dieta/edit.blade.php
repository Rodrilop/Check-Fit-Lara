<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Dieta
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-validation-errors class="mb-4" />
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('dieta.update', $dietas->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id" class="block font-medium text-sm text-gray-700">ID</label>
                            <input type="text" name="id" id="id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   disabled value="{{ old('id', $dietas->id) }}" />
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nome" class="block font-medium text-sm text-gray-700">Dieta</label>
                            <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nome', $dietas->nm_dieta) }}" />
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="calorias" class="block font-medium text-sm text-gray-700">Calorias</label>
                            <input type="text" name="calorias" id="calorias" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('calorias', $dietas->qt_caloria_dieta) }}" />
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inicio" class="block font-medium text-sm text-gray-700">Inicioo</label>
                            <input type="text" name="inicio" id="inicio" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('inicio', $dietas->dt_inicio_dieta) }}" />
                        </div>  

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="termino" class="block font-medium text-sm text-gray-700">Término</label>
                            <input type="text" name="termino" id="termino" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('termino', $dietas->dt_termino_dieta) }}" />
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