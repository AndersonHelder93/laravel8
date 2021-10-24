<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <title>Cadastrar Produto</title>
</head>
<body>
<div class="nav-wrapper blue darken-1">
        <i class="material icons">Menu</i>
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
                        <span><a class="waves-effect waves-light btn">Salvar<i class="material-icons left"></i></a></span>
                        <span><a href="/produto/ver" class="waves-effect waves-light btn">Listar</a></span>
                    </table>
                </form>
        </div>
    </div>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
</body>
</html>
