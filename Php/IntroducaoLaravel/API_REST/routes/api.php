<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Rotas
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    /**
     * Aqui eu tenho todas as rotas definidas do meu crud
     *
    */
Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
Route::get('alunos/{id}', [])->name('alunos.show');
Route::post('/alunos', [])->name('alunos.store');
Route::put('/alunos', [])->name('alunos.update');
Route::delete('/alunos', [])->name('alunos.destroy');
