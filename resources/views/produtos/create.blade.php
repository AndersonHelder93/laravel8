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
    <div class="row">
        <div class="center col s12 m6 push-m3">
            <h3 class="ligth">Produtos</h3>
                <form action="{{ route('salvar_produto') }}" method="POST">
                    @csrf
                    <table class="striped">
                        <div><label for="nome">Nome</label><input type="text" type="text" name="nome" id="nome"></div>
                        <div><label for="descricao">Descrição</label><input type="text" type="text" name="descricao" id="descricao"></div>
                        <div><label for="categoria">Categoria</label><input type="text" type="text" name="categoria" id="categoria"></div>
                        <div><label for="preco">Preço</label><input type="text" type="text" name="preco" id="preco"></div>
                        <div><label for="quantidade">Quantidade</label><input type="text" type="text" name="quantidade" id="quantidade"></div>
                        <button type="submit">Salvar</button>
                    </table>
                </form>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.fixed-action-btn');
            var instances = M.FloatingActionButton.init(elems, {
            direction: 'left'
        });
  });
    </script>

</body>
</html>
