@extends('Menupage')
@section('conteudo')
    <div class="container">
        <h1 class="titulo">Noticias Cadastradas</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Autor</th>
                </tr>

                @foreach($noticias as $noticia)
                    <tr>
                        <td>{{$noticia->id}}</td>
                        <td>{{$noticia->titulo}}</td>
                        <td>{{$noticia->texto}}</td>
                        <td>{{$noticia->autor}}</td>
                    <td>
                    <a href="{{route('noticia.delete', ['id' => $noticia->id])}}" class="btn btn-danger">Deletar</a><a href="{{route('noticia.update', ['id' => $noticia->id])}}" class="btn btn-warning">Editar</a>
                    </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <a href="/CadastroNoticia" class="btn btn-primary">Cadastrar</a>
    </div>
@endsection