@extends('Menupage')
@section('conteudo')


    <meta charset="utf-8">
    <link rel="stylesheet" href="css\CadastroNoticia.css" type="text/css"/>
    <title>Login de Acesso</title>

    <form action="Conexao\validacao.php" method="post">
        <div>
            <div>
                <h2>Nova Publicação</h2>
            </div>
            <div>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" required="required"/>
            </div>
            <label for="descricao">Descrição:</label>
            <div>

                <textarea id="descricao" rows="10" cols="80">

                </textarea>
            </div>
            <div>
                <label for="autor">Autor:</label>
                <input type="text" id="autor" required="required"/>
            </div>
            <div class="button">
                <button id="CadastrarNoticia" type="submit" value="CadastrarNoticia">Cadastrar Noticia</button>
                <a href="">Criar uma Conta</a>

            </div>
        </div>
    </form>


@endsection