<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
            //basicamente ela serve para armazenar os dados da sessão mesmo em caso de falha

            //O metodo only pega chaves de uma requisição
            $credenciais = $request->only('username', 'password');
            //acima estou guardando na var $credenciais a requisição que tem as chaves username e password

            //criando um 'objeto de array'
            $request->merge([
                'username' => $credenciais['username'],
                'password' => $credenciais['password'],
            ]);
            //array associativo passando os valores de username e password para a variavel request

            //isso aqui abaixo por algum motivo nao me parece algo legal(tem hora que funciona e hora que nao)
           // $teste = Auth::user()->accessToken;//isso aqui faz com que pegue os dados somente do usuario em questão
            //evita retornar todos os token do banco de dados -> NE IGOR ISSO ME DEU DOR DE CABEÇA COISA TAO BESTA

            //metodo attempt meio que compara os valores que eu passar com o Facade Auth que é uma mão na roda e cuida de tudo
            if (Auth::attempt($credenciais)) {
                //se bater o username e password
                return redirect()->intended("/?");//pq tem hora que isso funciona e hora que não?
                //redirecionei para a home '/' e usando o metodo intended passei o token
            }else{
                Session::flash('alert', 'Deu pau no login, tente de novo');
                return back()->withErrors("Credenciais inválidas");
            }
        }

    public function logout()
    {
    if(Auth::check()) {//se o user estiver autenticado
        Auth::logout();//logout
    }
        return back()->withErrors("LogOut concluído!");
    }

    public function verificaLogin()
    {
        if(Auth::check()){
            return back()->withErrors("Usuario já autenticado");
        }
    }

}

