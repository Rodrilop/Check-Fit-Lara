<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Aluno
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-jet-validation-errors class="mb-4" />
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('aluno.update', 5) }}">
                    @csrf
                    @method('PUT')
                    {{$aluno}}
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nome" disabled class="block font-medium text-sm text-gray-700">Nome</label>
                            <input type="text" disabled name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nome', $aluno->name) }}" />
                        </div>

                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <x-jet-label for="dieta" value="{{ __('Escolher Dieta') }}" />
                            <select id="dieta" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="dieta_id" value="old( 'dieta' )" required>
                            @if(!empty($aluno->dieta_id))
                                <option value="{{$aluno->dieta_id}}" selected> {{ $dietas->find($aluno->dieta_id)->nm_dieta }} </option>
                            @else
                                <option disabled value="{{$aluno->dieta_id}}" selected> Selecione uma dieta </option>
                            @endif  
                                @foreach($dietas as $dieta)
                                <option value="{{$dieta->id}}">{{$dieta->nm_dieta}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <x-jet-label for="treino" value="{{ __('Escolher Treino') }}" />
                            <select id="treino" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="treino_id" value="old( 'treino' )">
                            @if(!empty($aluno->treino_id))
                                <option value="{{$aluno->treino_id}}" selected> {{ $treinos->find($aluno->treino_id)->nm_treino }} </option>
                            @else
                                <option value="" selected> Selecione um treino </option>
                            @endif  
                                @foreach($treinos as $treino)
                                <option value="{{$treino->id}}">{{$treino->nm_treino}}</option>
                                @endforeach
                            </select>
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