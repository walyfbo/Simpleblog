<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class PaginasController extends Controller
    {
        public function index(){
            return view('homepage');
        }
        public function Login(){
            return view('loginpage');
        }
        public function Cadastrar(){
            return view('Cadastropage');
        }
        public  function CadastroNoticia(){
            return view('CadastroNoticia');
        }
        public  function ListaNoticia(){
            return view('ListaNoticia');
        }


        //-------------------------------------------------------------------------//
        //Tratamento do cadstro de Formulario//

       // public function TratarCadastro(Request $dados){
        //    return "Dados informados ";

       // }
    }
?>