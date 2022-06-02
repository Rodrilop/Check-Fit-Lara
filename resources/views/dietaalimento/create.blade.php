<x-app-layout>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('dieta.store') }}">
                    @csrf
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <x-jet-label for="alimento_id" value="Alimento" />
                            <select id="alimento_id" class="filtro block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="alimento_id" :value="old('alimento_id')" required>
                            @foreach($alimento as $a)
                                <option value="{{$a->id}}">{{$a->nm_alimento}}</option>
                            @endforeach
                            </select>
                            @error('alimento_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="qt_dieta_alimentos" class="block font-medium text-sm text-gray-700">Quantidade</label>
                            <input type="numeric" name="qt_dieta_alimentos" id="qt_dieta_alimentos" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('qt_dieta_alimentos', '') }}" />
                            @error('qt_dieta_alimentos')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <x-jet-label for="nm_dia_semana_dieta" value="Dia" />
                            <select id="nm_dia_semana_dieta" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="nm_dia_semana_dieta" :value="old('nm_dia_semana_dieta')" required>
                                <option selected>Selecione o Dia</option>
                                <option value="Segunda">Segunda</option>
                                <option value="Terça">Terça</option>
                                <option value="Quarta">Quarta</option>
                                <option value="Quinta">Quinta</option>
                                <option value="Sexta">Sexta</option>
                                <option value="Sábado">Sábado</option>
                                <option value="Domingo">Domingo</option>
                            </select>
                            @error('nm_dia_semana_dieta')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <x-jet-label for="nm_periodo_dieta" value="Refeição" />
                            <select id="nm_periodo_dieta" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="nm_periodo_dieta" :value="old('nm_periodo_dieta')" required>
                                <option selected>Selecione o Periodo</option>
                                <option value="Café da Manhã">Café da Manhã</option>
                                <option value="Almoço">Almoço</option>
                                <option value="Lanche">Lanche</option>
                                <option value="Janta">Janta</option>
                                <option value="Ceia">Ceia</option>
                            </select>
                            @error('nm_periodo_dieta')
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

    <script>
$(document).ready(function(){
  $("#relacaoAlimento").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".filtro option").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</x-app-layout>