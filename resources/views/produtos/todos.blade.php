<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Listar Produto</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper blue darken-1">
            <a href="#" class="brand-logo center">Produtos</a>
            <a href="/produto/novo" class="waves-effect waves-light btn">Inicio</a>
        </div>
    </nav>
    <table class="table table-striped">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Categoria</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
        </tr>
        @foreach($produtos as $produto)
        <tr scope="row">
            <td>{{$produto->nome}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->categoria}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->quantidade}}</td>
            <td><a href="{{route('editar_produto', ['id'=>$produto->id])}}" title="Editar Produto {{$produto->nome}}" class="waves-effect waves-light btn"> Editar </a>
            </td>
            <td><a href="{{route('excluir_produto', ['id'=>$produto->id])}}" title="Excluir Produto {{$produto->nome}}" class="waves-effect waves-light btn">Deletar</a>
            </td>
            <td>
                <a href="/produto/novo" class="waves-effect waves-light btn">Inserir</a>
            </td>
        </tr>
        @endforeach
</body>

</html>
