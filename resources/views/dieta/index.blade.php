<x-app-layout>
    <div>
        <div class="block mb-8">
            <a href="{{ route('dieta.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Criar Dieta</a>
        </div>
        <table>
            <tr>
                <th>Nome</th>
                <th>Calorias</th>
                <th>Data de Inicio</th>
                <th>Data de Termino</th>
            </tr>
            @foreach($dados as $d)
            <tr>
                <td>{{$d->nm_dieta}}</td>
                <td>{{$d->qt_caloria_dieta}}</td>
                <td>{{$d->dt_inicio_dieta}}</td>
                <td>{{$d->dt_termino_dieta}}</td>
            </tr>
            @endforeach
        </table>
    </div>    
    
</x-app-layout>