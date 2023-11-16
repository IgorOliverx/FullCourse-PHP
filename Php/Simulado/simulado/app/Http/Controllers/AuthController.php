<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    //esse metodo é necessário para a requisição via GET
    public function mostrarLogin()
    {
        //so retorna a view quando o user acessa o endpoint
        return view('login');
    }

    //metodo principal de login
    public function login(Request $request)//Recebe uma requisição no construtor (POST)
    {
        $request->session()->reflash();// é utilizada em conjunto com o return back

        $credenciais = $request->only('username', 'password');

        $request->merge([
            'username' => $credenciais['username'],
            'password' => $credenciais['password'],
        ]);

        $passaAcesso = User::query()->get('accessToken');//passando acesso da consulta ao bd
        $teste = Auth::user()->accessToken;//isso aqui faz com que pegue os dados somente do usuario em questão

        if (Auth::attempt($credenciais)) {
            return redirect()->intended("/?$teste");
        }

        return back()->withErrors("Credenciais inválidas");
    }


}
