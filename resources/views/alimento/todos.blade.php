<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
        <link href="/css/bootstrap.css" rel="stylesheet">
        <title>Tabela de Alimentos</title>
</head>
    <body>
    <table>
        <tr><th>Alimento</th><th>Descrição</th><th>Categoria</th><th></th><th></th></tr>
        @foreach($alimentos as $alimento)
            <tr>
                <td>{{$alimento->nm_alimento}}</td>
                <td>{{$alimento->ds_alimento}}</td>
                <td>{{$alimento->nm_categoria_alimento}}</td>
                <td><a href="{{ route('editar_alimento', ['id'=>$alimento->id])}}"
                        title="Editar alimento {{ $alimento->nm_alimento }}" >Editar</a></td>
                        
                <td><a href="{{ route('excluir_alimento', ['id'=>$alimento->id])}}"
                        title="Excluir alimento {{ $alimento->nm_alimento }}" >Excluir</a></td>
            </tr>
        @endforeach
    </body>
</html>