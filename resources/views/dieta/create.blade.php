<x-app-layout>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('dieta.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nm_dieta" class="block font-medium text-sm text-gray-700">Nome</label>
                            <input type="text" name="nm_dieta" id="nm_dieta" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nm_dieta', '') }}" />
                            @error('nm_dieta')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="qt_caloria_dieta" class="block font-medium text-sm text-gray-700">Calorias</label>
                            <input type="text" name="qt_caloria_dieta" id="qt_caloria_dieta" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('qt_caloria_dieta', '') }}" />
                            @error('qt_caloria_dieta')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="dt_inicio_dieta" class="block font-medium text-sm text-gray-700">Inicio</label>
                            <input type="date" name="dt_inicio_dieta" id="dt_inicio_dieta" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('dt_inicio_dieta', '') }}" />
                            @error('dt_inicio_dieta')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="dt_termino_dieta" class="block font-medium text-sm text-gray-700">Termino</label>
                            <input type="date" name="dt_termino_dieta" id="dt_termino_dieta" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('dt_termino_dieta', '') }}" />
                            @error('dt_termino_dieta')
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