<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyBlog</title>
        <link rel="stylesheet" href="css\Menu.css" type="text/css"/>
        <link rel="stylesheet" href="css\ListaUsuario.css" type="text/css"/>
        <link rel="stylesheet" href="css\cadastro.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <link rel="stylesheet" href="site.css"/>
    </head>
    <body>

        <header id="topo">
            <img src="css\imagemTopo.png" width="100%" height="">
        </header>

        <div id="menu">

            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/Login')}}">Login</a></li>
                <li><a href="{{url('/Cadastrar')}}">Cadastro</a></li>
            </ul>

        </div>
        <div id="busca">
            <img src="css\lupa32x32.png"  alt="Buscar..."/>
            <input type="text" id="txtbusca" placeholder="Buscar por..."/>
            <button id="btnBusca">Buscar</button>

        </div>

        <section class="content">
            @yield('conteudo')
        </section>
        <script src="jquery-3.0.0.min.js"></script>
        <script src="site.js"></script>
        <!--<footer>
            <span> Portal de Noticia&copy; <?=date('Y')?> -  Noticias a Todo Momento</span>
        </footer>-->
</html>