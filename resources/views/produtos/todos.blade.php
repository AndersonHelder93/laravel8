<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
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

        <td><a href="{{route('editar_produto', ['id'=>$produto->id])}}"
            title="Editar Produto {{$produto->nome}}" class="waves-effect waves-light btn"> Editar </a>
        </td>
        <td><a href="{{route('excluir_produto', ['id'=>$produto->id])}}"
            title="Excluir Produto {{$produto->nome}}" class="waves-effect waves-light btn">Deletar</a>
        </td>
    </tr>
    @endforeach
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
</body>
</html>
