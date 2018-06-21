<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyBlog</title>
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/Menu.css" type="text/css"/>
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/ListaUsuario.css" type="text/css"/>
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/cadastro.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="http://127.0.0.1:8000/site.css"/>
    </head>
    <body>
        <header id="topo">
            <img src="http://127.0.0.1:8000/css/imagemTopo.png" width="100%" height="">
        </header>

        <div id="menu">

            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/Login')}}">Login</a></li>
                <li><a href="{{url('/Cadastrar')}}">Cadastro</a></li>
            </ul>

        </div>
        <div id="busca">
            <input type="text" id="txtbusca" placeholder="Buscar por..."/>
            <button id="btnBusca">Buscar</button>

        </div>

        <section class="content">
            @yield('conteudo')
        </section>
        <hr>
        <div class="container-fluid bg-3 text-center">
                <h3>Contato</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <p>UTFPR</p>
                        Universidade Tec. Federal do Paraná.
                    </div>
                    <div class="col-sm-4">
                        <p>Email: walyson@alunos.utfpr.edu.br</p>
                    </div>
                    <div class="col-sm-4">
                        <p>Nossa Localização</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5110.019595956407!2d-50.11528235002307!3d-25.090704891815715!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81b99404f4daf%3A0x1f4b7e6df9b9c79a!2sA+P+Santa+Rita+Ltda!5e0!3m2!1sen!2sbr!4v1529550107951" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        <script src="jquery-3.0.0.min.js"></script>
        <script src="site.js"></script>
</html>