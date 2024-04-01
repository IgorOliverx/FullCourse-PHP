<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
* Nesta classe podemos controlar as sessões
*/
class AuthenticatedController extends Controller
{
    /**
     * Retornando a view logada
     */
    public function index():View
    {
        //especificar um tipo de dado para o retorno é uma boa prática!!!
        

        return view('auth.login');
    }

   
    /**
     * Método para autenticar usuários, e para dividir resp. posso criar um novo request personalizado
     * Esse request personalizado seria para por exemplo limitar numero de tentativas, a partir de x tentativas bloquear, enviar email de recuperação de senha ou seja lá o que quiser aplicar
     */
    public function store(LoginRequest $request)
    {
        //autentica o usuário
        $request->authenticate();

        //regenerar a sessão
        $request->session()->regenerateToken();
        var_dump('ok, isso definitivamente funcionou');

        //retornar algo (vou retornar um json sla)
        return redirect('/');
    }

   

    /**
     * Excluir a sessão autenticada
     */
    public function destroy(Request $request): RedirectResponse
    {
        //basicamente faz logout em seja lá quem estiver logado
        Auth::guard('web')->logout();

        //invalidar a sessão
        $request->session()->invalidate();

        //Regenerar token de acesso ao login
        $request->session()->regenerateToken();

        //redirecionando para a home por exemplo
        return redirect('/');
    }
}
