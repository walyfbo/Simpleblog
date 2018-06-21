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
            <div class="container">
                <h1 class="titulo">O que tem de novo!</h1>
                <hr>
                @foreach($noticias as $noticia)
                    <div class="col-md-12 blog-post">
                        <div class="post-title">
                            <h1>{{$noticia->titulo}}</h1>
                        </div>  
                        <div class="post-info">
                            <span>{{$noticia->updated_at}} / por <a href="#" target="_blank">{{$noticia->autor}}</a></span>
                        </div>  
                        <p>{{$noticia->texto}}</p>
                        <a href="single.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Leia mais</span></a>
                    </div>
                @endforeach
                <hr>
            </div>
        </body>
    </html>


@endsection


