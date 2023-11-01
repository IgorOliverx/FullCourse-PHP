<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function index()
    {
        // Exibe o formulário de login
        return view('login');
    }

    public function login(Request $request)
    {
        // Valida as credenciais de login
        $email = $request->input('email');
        $senha = $request->input('senha');

        $usuario = Usuario::where('email', $email)->first();

        if ($usuario && $usuario->senha === $senha) {
            // O usuário está logado
            $request->session()->put('usuario', $usuario);

            // Redireciona para o painel de controle
            return redirect('/painel');
        } else {
            // As credenciais de login estão incorretas
            return redirect('/login')->withErrors(['email' => 'E-mail ou senha inválidos.']);
        }
    }
}
