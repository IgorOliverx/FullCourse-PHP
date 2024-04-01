<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    /**
     * Retornar a view de cadastro
     */
    public function index(): View
    {
        return view('auth.register');
    }


    /**
     * Método para criar um usuário
     */
    public function store(Request $request)
    {
        //primeiro preciso verificar quais dados estão passando pela request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ]);

        //Depois de validar as regras preciso criar o usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        //Depois de criar o usuário, anunciar em um evento

        event(new Registered($user));

        //Já autenticando o usuário
        Auth::login($user);


        return $user;
    }

   //Note que eu só preciso deste método nesta classe
}
