<?php

use Illuminate\Support\Facades\Route;

////Rota principal da aplicação
//Route::get('/', function () {//ponto inicial da aplicação -> onde o user acessa
//    return view('welcome'); // ponto final da aplicação. Posteriormente virá com a manipulação dos referidos dados
//});

//Demonstrando como chamar um controller em uma rota
Route::get('/', [App\Http\Controllers\EvcentController::class, 'index']);
Route::get('/events/create', [App\Http\Controllers\EvcentController::class, 'create']);



//para poder acessar paginas a partir de urls:
//Classe route -> verbo get
Route::get('/contatos', function () { //passo a url amigavel
    return view('contatos');//retorno qual view ele verá
});
Route::get('/produtos', function(){
   return view('produtos');
});

//trabalhando com rotas com parametros:
Route::get('/produtos/{id}', function($id = null){
    return view('produtos', ['id'=>$id]);
});
