<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas da web para sua aplicação. Esses
| rotas são carregadas pelo RouteServiceProvider e todas elas serão
| ser atribuído ao grupo de middleware "web". Faça algo ótimo!
|
*/

//A classe Route(estatica), tem o método estático get, que ao ser inserido essa URI no navegador, posso direcionar algo, normalmente, uma view
Route::get('/', function () {
    return view('welcome');
});



Route::get('/series', [\App\Http\Controllers\SeriesController::class, 'index']);
Route::get('/series/criar', [\App\Http\Controllers\SeriesController::class, 'create']);
