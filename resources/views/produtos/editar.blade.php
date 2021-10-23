<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <style>
        label{
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>
<body>
    <form action="{{ route('atualizar_produto', ['id' => $produto->id]) }}" method="POST">
        @csrf
            <div><label for="nome">Nome</label>
            <input type="text" type="text" name="nome" id="nome" value="{{$produto->nome}}"></div>
            <div><label for="descricao">Descrição</label>
            <input type="text" type="text" name="descricao" id="descricao" value="{{$produto->descricao}}"></div>
            <div><label for="categoria">Categoria</label>
            <input type="text" type="text" name="categoria" id="categoria" value="{{$produto->categoria}}"></div>
            <div><label for="preco">Preço</label>
            <input type="text" type="text" name="preco" id="preco" value="{{$produto->preco}}"></div>
            <div><label for="quantidade">Quantidade</label>
            <input type="text" type="text" name="quantidade" id="quantidade" value="{{$produto->quantidade}}"></div>
            <button type="submit">Salvar</button>
    </form>
</body>
</html>
