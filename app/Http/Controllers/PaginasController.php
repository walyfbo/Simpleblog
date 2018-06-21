<?php

    namespace App\Http\Controllers;

    use App\Noticia;

    use Illuminate\Http\Request;

    class PaginasController extends Controller
    {
        public function index(){

            $noticias = Noticia::orderBy('created_at', 'desc')->get();

            return view('homepage')->with('noticias', $noticias);
        }

        public function Login(){
            return view('loginpage');
        }

        public function Cadastrar(){
            return view('Cadastropage');
        }

       public function noticiastore(Request $request){
            $noticias = new Noticia;

            $noticias->titulo = $request->titulo;
            $noticias->texto = $request->descricao;
            $noticias->autor = $request->autor;

            $noticias->save();

            return redirect('/');
       }

       public function noticiadelete($id){

            $noticias = Noticia::find($id);
            $noticias->delete();

            return redirect()->back();
       }

       public function noticiaupdate($id){

            $noticias = Noticia::find($id);
            return view('UpdateNoticia')->with('noticias', $noticias);
       }

       public function CadastroNoticia(){
            return view('CadastroNoticia');
       }

        public  function ListaNoticia(){
            $noticias = Noticia::all();

            return view('ListaNoticia')->with('noticias', $noticias);
        }

        public function noticiaupdatesave(Request $request, $id){
            $noticias = Noticia::find($id);

            $noticias->titulo = $request->titulo;
            $noticias->texto = $request->descricao;
            $noticias->autor = $request->autor;

            $noticias->save();
            
            return redirect('/ListaNoticia');
        }




        //-------------------------------------------------------------------------//
        //Tratamento do cadstro de Formulario//

       // public function TratarCadastro(Request $dados){
        //    return "Dados informados ";

       // }
    }
?>