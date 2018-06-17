@extends('Menupage')
@section('conteudo')

<
            @if(isset($usuario))
                <form id="cadastro"  method="post" action="{{url('CadastroUsuario.update',$usuario->id)}}">
                    {!! method_field(PUT) !!}
            else
                    <form id="cadastro"  method="post" action="{{url('CadastroUsuario/store')}}">

            @endif
                    {!! csrf_field() !!}
                    <div>
                        <h2>Cadastro</h2>
                    </div>
                    <div>
                        <label for="nome" >Nome:</label>
                        <input  type="text" id="nome"  required="required" value="{{$usuario->nome}}"/>
                        <span class="style1">*</span>
                    </div>

                    <div>
                        <label for="email">Email:</label>
                        <input  type="text" id="email"  required="required" value="{{$usuario->email}}/>
                        <span class="style1">*</span>
                    </div>
                    <div>
                        <label for="sexo">Sexo:</label>
                        <td><input id="sexo" type="radio" value="Masculino" checked="checked" required="required" />
                            Masculino
                            <input id="sexo" type="radio" value="Feminino" />
                            Feminino <span class="style1">*</span> </td>
                    </div>
                    <div>
                        <label for="ddd">DDD:</label>
                        <input  type="text" id="ddd" size="4" maxlength="2" value="{{$usuario->ddd}}/>
                            Telefone:
                            <input name="telefone" type="text" id="telefone" value="{{$usuario->fone}}/>
                            <span class="style1">Apenas números</span> </td>
                    </div>
                    <div>
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" size="70" maxlength="70" required="required" value="{{$usuario->endereco}}/>
                            <span class="style1">*</span></td>
                    </div>
                    <div>
                        <label for="cidade">Cidade:</label>
                        <input  type="text" id="cidade" maxlength="20" required="required" value="{{$usuario->cidade}}/>
                            <span class="style1">*</span></td>
                        Estado:
                        <select  id="estado" required="required" value="{{$usuario->estado}}>
                                <option>Selecione...</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="ES">ES</option>
                                <option value="DF">DF</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                            <span class="style1">*      </span>
                    </div>
                    <div>
                        <label for="bairro">Bairro:</label>
                        <input  type="text" id="bairro" maxlength="20" required="required" value="{{$usuario->bairro}}/>
                            <span class="style1">*</span></td>
                    </div>
                    <div>
                        <label for="login">Login:</label>
                        <input type="text" id="login" maxlength="12" required="required" value="{{$usuario->login}}/>
                            <span class="style1">*</span></td>
                    </div>
                    <div>
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" maxlength="12" required="required" value="{{$usuario->senha}}/>
                            <span class="style1">*</span></td>
                    </div>
                    <div>
                        <label for="confirmasenha">Confirma Senha:</label>
                        <input type="password" id="confirmasenha" maxlength="12" required="required" value="{{$usuario->confsenha}}/>
                            <span class="style1">*</span></td>
                    </div>

                    <div class="button">
                        <button class="btn btn-secondary">Cadastrar</button>

                        <span class="style1"> Campos com * são obrigatórios! </span></p>
                            <p>  </p>
                    </div>

            </form>

@endsection