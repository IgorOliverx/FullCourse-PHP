<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VerServicos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [SiteController::class, 'index']);
Route::get('/contato', [SiteController::class, 'contato']);
Route::get('/sobre', [SiteController::class, 'sobre']);

Route::get('servico/{codigo}', [VerServicos::class]);


Route::get('/register', [RegisteredUserController::class, 'index'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/login', [AuthenticatedController::class, 'index'])->name('login');
Route::post('/login', [AuthenticatedController::class, 'store'])->name('login');