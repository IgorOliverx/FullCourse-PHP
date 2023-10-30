<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Criando a rota para acessar o crud -> acesso pelo controller
Route::get('/create/user', [UserController::class, 'create'])->name('create.user');

Route::post('/create/user', [UserController::class, 'store'])->name('create.store');//store é o metodo que faz a gravacao das requisições
