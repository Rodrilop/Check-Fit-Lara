<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dieta
        </h2>
    </x-slot>
    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('dietaalimento.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Adicionar Alimento</a>
            </div>
            <table>
                <tr>
                    <th>Dia</th>
                    <th>Periodo</th>
                    <th>Alimento</th>
                    <th>Quantidade</th>
                </tr>
                @foreach($dados as $d)
                <tr>
                    <td>{{$d->nm_dia_semana_dieta_alimentos}}</td>
                    <td>{{$d->nm_periodo_dieta_alimentos}}</td>
                    <td>{{$d->belongsToMany("App\Models\Alimento",'id')->get()->nm_alimento}}</td>
                    <td>{{$d->qt_dieta_alimentos}}</td>
                </tr>
                @endforeach
            </table>
        </div> 
    </div>   
</x-app-layout>