<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Cadastrar Produto</title>
</head>

<body>
    <div class="nav-wrapper blue darken-1">
        <i class="material icons">.</i>
    </div>
    </nav>
    <div class="container">
        <div class="center col s12 m6 push-m3">
            <h3 class="ligth">Produtos</h3>
            <form action="{{ route('salvar_produto') }}" method="POST">
                @csrf
                <table class="table">
                    <div><label for="nome">Nome</label><input type="text" type="text" name="nome" id="nome"></div>
                    <div><label for="descricao">Descrição</label><input type="text" type="text" name="descricao" id="descricao"></div>
                    <div><label for="categoria">Categoria</label><input type="text" type="text" name="categoria" id="categoria"></div>
                    <div><label for="preco">Preço</label><input type="text" type="text" name="preco" id="preco"></div>
                    <div><label for="quantidade">Quantidade</label><input type="text" type="text" name="quantidade" id="quantidade"></div>
                    <div><button class="btn waves-effect waves-light" type="submit" name="action">Salvar</button></div>
                    <br>
                    <div><span><a href="/produto/ver" class="waves-effect waves-light btn">Listar</a></span></div>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
