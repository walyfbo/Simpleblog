<?php

    namespace App\Http\Controllers;

    use App\Noticia;

    use Illuminate\Http\Request;

    class PaginasController extends Controller
    {
        public function index(){

            $noticias = Noticia::all();

            return view('homepage')->with('noticias', $noticias);
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
            $noticias = Noticia::all();

            return view('ListaNoticia')->with('noticias', $noticias);;
        }




        //-------------------------------------------------------------------------//
        //Tratamento do cadstro de Formulario//

       // public function TratarCadastro(Request $dados){
        //    return "Dados informados ";

       // }
    }
?>