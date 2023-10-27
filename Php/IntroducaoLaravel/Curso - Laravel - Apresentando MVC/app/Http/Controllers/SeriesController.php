<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function create()
    {
        return view('series.create');
    }
    public function index( )
    {
        //$request->get('id'); // Posso procurar o retorno que cai na requisição
        //$request->url(); // Me retorna a url da página em que estou
        //$request->method() // Me retorna o metodo que foi utilizado para acessar a requisição, tipo GET ou POST;
        //$request->input('id'); // Retorna o input que veio de um formulario

        //return redirect('https://google.com'); // redirecionamento a pagina do google por exemplo

      // $series = Serie::all(); //A model serie (Eloquent orm) vai buscar tudo que estiver mapeado na tabela pré-definida dentro do model
    //acima salvei as infos no bd
        $series = Serie::query()->orderBy('nome')->get();//query builder que ordena em ordem crescente

        //return view('listar-series', compact('series'));//Posso fazer assim OUUUU

        return view('series.index') -> with('series', $series);
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie -> nome = $nomeSerie;
        $serie->save();

            return redirect('/series');

    }


}
