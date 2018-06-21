@extends('Menupage')
@section('conteudo')
    <meta charset="utf-8">
    <title>Update de Noticias</title>
    <div class="row">
        <div class="col-lg-2">
            <form action="{{route('noticia.update.save',['id' => $noticias->id])}}" method="post">
                {{csrf_field()}}

                <label for="autor">Autor:</label>
                <input type="text" id="autor" class="form-control input-lg" name="autor" value="{{$noticias->autor}}" placeholder="Autor"></input>
            
                <label for="titulo" >Titulo:</label>
                <input type="text" id="titulo" class="form-control input-lg" name="titulo" value="{{$noticias->titulo}}" placeholder="Título"></input>

                <label for="descricao">Descrição:</label>
                <textarea class="form-control" rows="8" id="descricao" name="descricao" placeholder="Descrição">{{$noticias->texto}}</textarea>
                <br>
                <button class="btn btn-success">Enviar</button>
        </form>
        </div>
    </div>
@endsection