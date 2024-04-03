<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VerServicos;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
   return view('home');
});

Route::get('/teste', function(){
    return view('teste');
});


//rotas de cadastro
Route::get('/register', [RegisteredUserController::class, 'index'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

//rotas de login
Route::get('/login', [AuthenticatedController::class, 'index'])->name('login');
Route::post('/login', [AuthenticatedController::class, 'store'])->name('login');

//rota de logout
Route::post('/logout', [AuthenticatedController::class, 'destroy'])->name('logout');
