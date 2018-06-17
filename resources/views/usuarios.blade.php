@extends('Menupage')
@section('conteudo')
    <div class="container">
        <h1 class="titulo">Usuarios Cadastrados</h1>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Sexo</th>
                <th>DDD</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Login</th>
                <th >Opções</th>
            </tr>

            @foreach($lista_usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nome}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->sexo}}</td>
                    <td>{{$usuario->ddd}}</td>
                    <td>{{$usuario->fone}}</td>
                    <td>{{$usuario->endereco}}</td>
                    <td>{{$usuario->bairro}}</td>
                    <td>{{$usuario->login}}</td>
                    <td>
                        <a href="{{url("ListaUsuario/$usuario->id/edit")}}">
                            <img src="css\editar.ico" title="Editar"/>
                        </a>
                        <a href="" class="actions delete">
                            <img src="css\deletar.ico" title="Deletar"/>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{url('ListaUsuario/create')}}" class="btn btn-secondary">
            <img src="css\mais.ico"> Cadastrar
        </a>

    </div>
@endsection