<?php

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


