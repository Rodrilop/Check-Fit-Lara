<x-app-layout>
    
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-jet-validation-errors class="mb-4" />
            <div class="px-4 py-5 bg-white sm:p-6">
                <form method="post" action="{{ route('dietaalimento.store') }}">
                    @csrf
                    <div class="px-4 py-5 bg-white sm:p-6">
                    <x-jet-label for="dieta_id" value="Dieta" />
                    <input type="text" name="dieta_id" id="dieta_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{$dieta}}" />
                    </div>                    
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <x-jet-label for="alimento_id" value="Alimento" />
                        <select id="alimento_id" class="filtro block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="alimento_id" :value="old('alimento_id')" required>
                        @foreach($alimento as $a)
                            <option value="{{$a->id}}">{{$a->nm_alimento}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="quantidade" class="block font-medium text-sm text-gray-700">Quantidade</label>
                        <input type="text" name="quantidade" id="quantidade" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('quantidade', '') }}" />
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <x-jet-label for="medida" value="Medida" />
                        <select id="medida" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="medida" 
                         value="old('medida')">
                            <option value="g">(g) grama(s)</option>
                            <option value="kg">(kg) Kilograma(s)</option>
                            <option value="unidade">Unidade(s)</option>
                        </select>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <x-jet-label for="dia" value="Dia" />
                        <select id="dia" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="dia" 
                         value="old('dia')">
                            <option disabled selected>Selecione o Dia</option>
                            <option value="Segunda">Segunda-Feira</option>
                            <option value="Terça">Terça-Feira</option>
                            <option value="Quarta">Quarta-Feira</option>
                            <option value="Quinta">Quinta-Feira</option>
                            <option value="Sexta">Sexta-Feira</option>
                            <option value="Sábado">Sábado</option>
                            <option value="Domingo">Domingo</option>
                        </select>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <x-jet-label for="periodo" value="Refeição" />
                        <select id="periodo" class="block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="periodo" :value="old('periodo')" required>
                            <option disabled selected>Selecione o Periodo</option>
                            <option value="Café da Manhã">Café da Manhã</option>
                            <option value="Almoço">Almoço</option>
                            <option value="Lanche">Lanche</option>
                            <option value="Janta">Janta</option>
                            <option value="Ceia">Ceia</option>
                        </select>
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