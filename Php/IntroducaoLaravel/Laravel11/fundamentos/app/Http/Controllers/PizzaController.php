<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PizzaController extends Controller
{
    public function index()
    {
        return view('pizzas.index', [
            'pizzas'=> DB::table('pizzas')->get()
        ]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store(Request $request)
    {
        //Capturando o nome do arquivo que veio no request e concatenando com um número aleatório em caso de upload com arquivos de mesmo nome
       $nome_arquivo = rand(0, 999999) . '-' . $request->file('img_pizza')->getClientOriginalName();

       //Capturando o path(local do arquivo)
       $path = $request->file('img_pizza')->storeAs('uploads', $nome_arquivo);

        //Capturando todos os dados passados do request
        $dados = $request->all();
        //dd($dados);

        //Alterando o dado original que veio do formulário para o nome com o random(segurança)
        $dados['img_pizza'] = $path;

        //Salvando isso na minha base de dados
        Pizza::create($dados);

        //redirecionando para a pagina de visualização das pizzas
        return redirect()->route('pizza.index');

        //lembre-se de usar o comando: php artisan storage:link
        //Ela serve para linkar minha pasta local com a pasta public, que é a que sobe para o servidor


    }
}
