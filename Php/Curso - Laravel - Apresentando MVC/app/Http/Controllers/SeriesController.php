<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function create()
    {
        return view('series.create');
    }
    public function index(Request $request)
    {
        //$request->get('id'); // Posso procurar o retorno que cai na requisição
        //$request->url(); // Me retorna a url da página em que estou
        //$request->method() // Me retorna o metodo que foi utilizado para acessar a requisição, tipo GET ou POST;
        //$request->input('id'); // Retorna o input que veio de um formulario

        //return redirect('https://google.com'); // redirecionamento a pagina do google por exemplo

       $series = [
          'naruto',
          'one piece',
          'HunterxHunter',
           'Kimetsu no Yaiba',
        ];


        //return view('listar-series', compact('series'));//Posso fazer assim OUUUU

        return view('series.index') -> with('series', $series);
    }


}
