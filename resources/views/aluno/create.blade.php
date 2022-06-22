<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Aluno
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-jet-validation-errors class="mb-4" />
        <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('aluno.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Nome</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="text" name="email" id="email" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6" x-show="xcategoria == 'Aluno'">
                            <label for="cpf" class="block font-medium text-sm text-gray-700">CPF</label>
                            <x-jet-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" />
                        </div>
                        <div class="mt-4 hidden">
                            <x-jet-label for="categoria" value="{{ __('Cadastrar Como:') }}" />
                            <select name="categoria" x-model="xcategoria" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected value="Aluno">Aluno</option>
                            </select>
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6" x-show="xcategoria == 'Aluno'">
                            <x-jet-label for="professor_id" value="{{ __('Professor') }}" />
                            <x-jet-input id="professor_id" class="block mt-1 w-full" type="text" name="professor_id" value='{{Auth::user()->id}}' />
                            {{Auth::user()->name}}
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Cadastrar
                            </button>
                        </div>
                        <div class="block mt-8">
                            <a href="{{ route('aluno.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Voltar para LIsta</a>
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>