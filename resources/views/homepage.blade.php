@extends('Menupage')
@section('conteudo')
     <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>HomePage</title>
            <meta name="viewport" content="width=device=width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min;js"></script>

            <style>
                .bg-1{
                    background-color: #1abc9c;
                    color: #ffffff;
                }
                .bg-2{
                    background-color: #474e5d;
                    color: #ffffff;
                }
                .bg-3{
                    background-color: #ffffff;
                    color: #555555;
                }
                .text-center{
                    text-align: center;
                }
                .container-fluid{
                    padding-top: 70px;
                    padding-bottom: 70px;
                }
            </style>
        </head>
        <body>
          <!-- <div class="container-fluid bg-1 text-center">
                <h3>Meu Blog </h3>
                <img src="tigre.jpg"  class="img-circles" alt="Bird">
                <h3>Bem vindo ao meu blog</h3>
            </div>
            <div class="container-fluid bg-2 text-center">
                <h3>Quem eu sou?</h3>
                <p>Lorem ipsum...</p>
            </div>-->
            <div class="container">
        <h1 class="titulo">Noticias Cadastradas</h1>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Tituo</th>
                <th>Descrição</th>
                <th>Autor</th>
            </tr>

            @foreach($noticias as $noticia)
                <tr>
                    <td>{{$noticia->id}}</td>
                    <td>{{$noticia->titulo}}</td>
                    <td>{{$noticia->descricao}}</td>
                    <td>{{$noticia->autor}}</td>
                </tr>
            @endforeach
        </table>
        <a href="" class="btn btn-secondary">
            <img src="css\mais.ico"> Cadastrar
        </a>

    </div>
            <div class="container-fluid bg-3 text-center">
                <h3>Onde me encontrar</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <p>lorim ipsum...</p>
                        <img src="tigre.jpg" alt="Image">
                    </div>
                    <div class="col-sm-4">
                        <p>lorim ipsum...</p>
                        <img src="tigre.jpg" alt="Image">
                    </div>
                    <div class="col-sm-4">
                        <p>lorim ipsum...</p>
                        <img src="tigre.jpg" alt="Image">
                    </div>
                </div>
            </div>

        </body>
    </html>


@endsection


