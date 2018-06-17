@extends('Menupage')
@section('conteudo')
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="css\Login.css" type="text/css"/>
            <title>Login de Acesso</title>
        </head>
        <body>
            <form action="Conexao\validacao.php" method="post">
                <div>
                    <div>
                        <h2>Login</h2>
                    </div>
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="text" id="email" required="required"/>
                    </div>
                    <div>
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" required="required"/>
                    </div>
                    <div class="button">
                        <button id="login" type="submit" value="login">Entrar</button>
                        <a href="Cadastropage.blade.php">Criar uma Conta</a>

                    </div>
                </div>
            </form>
        </body>
    </html>
@endsection