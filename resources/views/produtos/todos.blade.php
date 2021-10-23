<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produto</title>
</head>
<body>
<table>
    <tr>
        <th>Nome</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
    @foreach($produtos as $produto)
    <tr>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->categoria}}</td>
        <td>{{$produto->preco}}</td>
        <td>{{$produto->quantidade}}</td>
        <td><a href="{{route('editar_produto', ['id'=>$produto->id])}}"
            title="Editar Produto {{$produto->nome}}"> Editar </a>
        </td>
        <td><a href="{{route('excluir_produto', ['id'=>$produto->id])}}"
            title="Excluir Produto {{$produto->nome}}"> Deletar</a>
        </td>
    </tr>
    @endforeach
</body>
</html>
