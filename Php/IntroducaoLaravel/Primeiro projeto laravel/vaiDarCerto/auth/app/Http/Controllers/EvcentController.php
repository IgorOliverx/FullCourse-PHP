<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvcentController extends Controller
{
    public function index()//convenção de que a barra seja o index
    {
        $nome = 'Igor';
        $idade = 17;

        $arra = [10,20,30,40];
        $nomes = ["Igor", 'Lindo', "Voce consegue"];
        return view('welcome',
        [
           'nome' => $nome,
        'idade2' => $idade,
            'profissao' => "Programador",
            'arr' => $arra,
            'nomes' => $nomes
        ]);
    }

    public function create()
    {
        return view('events.create');
    }

}
