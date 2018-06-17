@extends('Menupage')
@section('conteudo')
    <div class="container">
        <h1 class="titulo">Noticias Cadastradas</h1>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Tituo</th>
                <th>Descrição</th>
                <th>Autor</th>
            </tr>

            @foreach($lista_noticias as $noticia)
                <tr>
                    <td>{{$noticia->id}}</td>
                    <td>{{$noticia->titulo}}</td>
                    <td>{{$noticia->descricao}}</td>
                    <td>{{$noticia->autor}}</td>

                    <td>
                        <a href="">
                            <img src="css\editar.ico" title="Editar"/>
                        </a>
                        <a href="" class="actions delete">
                            <img src="css\deletar.ico" title="Deletar"/>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="" class="btn btn-secondary">
            <img src="css\mais.ico"> Cadastrar
        </a>

    </div>
@endsection