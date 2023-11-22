<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Retorna os valores.
     */
    public function index()
    {
        return Aluno::all();
    }

    /**
     * Cria um recurso
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostra um recurso a partir de um ID
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Atualiza um recurso
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Deleta um recurso a partir de um ID.
     */
    public function destroy(string $id)
    {
        //
    }
}
