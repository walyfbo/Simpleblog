<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function __construct(Usuarios $usuarios)
    {
        $this->usuarios = $usuarios;
    }
    public function listar()
    {
        $lista_usuarios = Usuarios::all();

        return view('usuarios', ['lista_usuarios' => $lista_usuarios]);
    }
    public function index(Usuarios $usuario)
    {
        $usuarios = $usuario->all();
        return view('index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cadastropage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadform = $request->all();

        $cadastrado = $this->usuarios->create($cadform);

        if ($cadastrado)
            return redirect()->route('/ListaUsuario');
        else
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->usuarios->find($id);

        return view('Cadastropage',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dateForm = $request->all();

        $usuario = $this->usuarios->find($id);

        $editarForm = $usuario->update($dateForm);

        if($dateForm)
            return redirect()->route('ListarUsuario');
        else
            return redirect()->route('usuario.edit',$id)->with(['error'=>'Falha na edição']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
