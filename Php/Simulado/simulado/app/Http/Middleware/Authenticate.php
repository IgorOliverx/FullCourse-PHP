<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    //metodo de redirecionamento caso a autenticação ja tenha acontecido
    protected function redirectTo(Request $request): ?string
    {
        //retorna nulo se for uma api(JSON connection in the front end) ou retorna para a pagina de login
        return $request->expectsJson() ? null : route('login');
    }


    //metodo principal da classe()-> caso toda a autenticação funcione ou nao funcione
    public function handle($request, Closure|\Closure $next, ...$guards)//cabeçalho recebe a requisição e algumas paradas
    {
       if(!Auth::check()){//se o usuario nao estiver autenticado
           return redirect('/Unauthorized');//redireciona para a alguma view que eu quiser
       }

        return $next($request);//caso ele esteja, prossegue com a requisição (nesse simulado estou tratando acesso a endpoints)
    }

}
