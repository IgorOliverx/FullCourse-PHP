<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function mostrarLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    }

}
//public function showLoginForm()
//{
//    return view('auth.login');
//}
//
//public function login(Request $request)
//{
//    $credentials = $request->only('email', 'password');
//
//    if (Auth::attempt($credentials)) {
//        return redirect()->intended('dashboard');
//    }
//
//    return back()->withErrors([
//        'email' => 'The provided credentials do not match our records.',
//    ]);
//}
