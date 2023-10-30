<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)//Isso é uma injeção de dependencia e serve para eu poder ter acesso as requisições http para tratá-las
    {
        dd($request->all()); //dd()->debugger para exibir as infos que vem do meu request/requisição
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
