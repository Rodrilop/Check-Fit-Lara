<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
        <link href="/css/bootstrap.css" rel="stylesheet">
        <title>Cadastrar novo livro</title>
        <style>
            label{
                float: left;
                display: block;
                width:90px;
            }
        </style>
    </head>
    <body>
        <form action="{{ route('atualizar_alimento', ['id' => $alimento->id]) }}" method="post">
        @csrf
            <div><label for="nm_alimento">Alimento</label>
            <input type="text" name="nm_alimento" id="nm_alimento" value="{{$alimento->nm_alimento}}"></div>
            <div><label for="ds_alimento">Descrição</label>
            <input type="text" name="ds_alimento" id="ds_alimento" value="{{$alimento->ds_alimento}}"></div>
            <div><label for="nm_categoria_alimento">Categoria</label>
            <input type="nm_categoria_alimento" name="nm_categoria_alimento" id="nm_categoria_alimento" value="{{$alimento->nm_categoria_alimento}}"></div>
            <button type="submit">Salvar</button>
        </form> 
    </body>
</html>