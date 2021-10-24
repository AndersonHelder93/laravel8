<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Editar Produto</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper blue darken-1">
            <a href="/produto/novo" class="waves-effect waves-light btn">Inicio</a>
        </div>
    </nav>
    <div class="container">
        <div class="center col s12 m6 push-m3">
            <h3 class="ligth">Produtos</h3>
            <form action="{{ route('atualizar_produto', ['id' => $produto->id]) }}" method="POST">
                @csrf
                <table class="table">
                    <div><label for="nome">Nome</label>
                        <input type="text" type="text" name="nome" id="nome" value="{{$produto->nome}}">
                    </div>
                    <div><label for="descricao">Descrição</label>
                        <input type="text" type="text" name="descricao" id="descricao" value="{{$produto->descricao}}">
                    </div>
                    <div><label for="categoria">Categoria</label>
                        <input type="text" type="text" name="categoria" id="categoria" value="{{$produto->categoria}}">
                    </div>
                    <div><label for="preco">Preço</label>
                        <input type="text" type="text" name="preco" id="preco" value="{{$produto->preco}}">
                    </div>
                    <div><label for="quantidade">Quantidade</label>
                        <input type="text" type="text" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Salvar</button>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
