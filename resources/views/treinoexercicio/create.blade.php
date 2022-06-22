<x-app-layout>
    
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-jet-validation-errors class="mb-4" />
            <div class="px-4 py-5 bg-white sm:p-6">
                <form method="post" action="{{ route('treinoalimento.store') }}">
                    @csrf
                    <div class="px-4 py-5 bg-white sm:p-6">
                    <x-jet-label for="treino_id" value="treino" />
                    <input type="text" name="treino_id" id="treino_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{$treino}}" />
                    </div>                    
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <x-jet-label for="exercicio_id" value="Exercicio" />
                        <select id="exercicio_id" class="filtro block font-medium text-sm text-gray-700 rounded-md shadow-sm mt-1 block w-full" type="select" name="exercicio_id" :value="old('exercicio_id')" required>
                        @foreach($exercicio as $e)
                            <option value="{{$e->id}}">{{$e->nm_exercicio}}</option>
                        @endforeach
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