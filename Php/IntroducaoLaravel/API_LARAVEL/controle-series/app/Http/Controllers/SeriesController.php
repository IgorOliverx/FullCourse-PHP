<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * PARA LISTAR TODOS OS RECURSOS
     */
    public function index()
    {
        //Criei um array para exibir infos, mas normalmente é uma consulta do BD
        $series = [
            'Naruto',
            'One piece',
            'Jujutsu Kaisen'
        ];

        //retornei a view do blade para listar as series dizendo que a variavel series na view, vem da variavel series aqui
        return view('series.index')->with('series', $series);
        // '.' indica a separação de diretórios
    }

    /**
     * CRIE UM RECURSO A PARTIR DE UM FORMULÁRIO
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * ARMAZENE UM RECURSO CRIADO A PARTIR DE UMA REQUISIÇÃO - NO BANCO DE DADOS
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * EXIBA UM RECURSO ESPECÍFICO A PARTIR DE SEU ID
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * ATUALIZA UM RECURSO ESPECÍFICO A PARTIR DE UMA REQUISIÇÃO E SEU ID
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * REMOVE UM RECURSO ESPECÍFICO A PARTIR DE SEU ID
     */
    public function destroy(string $id)
    {
        //
    }
}
