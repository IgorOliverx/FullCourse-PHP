<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\MotherBoardController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\RamMemoryController;
use App\Http\Controllers\StorageDeviceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//rotas para acessar as paginas listando as entidades(retorna imagem e etc)
Route::get('/machines',[MachineController::class, 'card']); // ok (listando entidades)
Route::get('/processor', [ProcessorController::class, 'card']); //ok(listando entidades)
Route::get('/motherboard', [MotherBoardController::class, 'card']); //ok(listando entidades)
Route::get('/rammemory', [RamMemoryController::class, 'card']);//ok (listando entidades)
Route::get('/storagedevice', [StorageDeviceController::class, 'card']);//ok (listando entidades)
Route::get('/graphiccard', [GraphicCardController::class, 'card']);//ok(listando entidades)
Route::get('/powersupply', [PowerSupplyController::class, 'card']);//ok(listando entidades)


Route::group(['middleware' => ['web']], function(){
    Route::get('/login', 'AuthController@showLoginForm')->name('login');
    Route::post('/login', 'AuthController@login');
    Route::post('/logout', 'AuthController@logout')->name('logout');

});



//todas as rotas retornam um objeto json, agora so precisa fazer autenticação -> isso para a api
Route::get('/api/graphiccard',[GraphicCardController::class, 'index']); //Rotas ok

Route::get('/api/motherboard',[MotherBoardController::class, 'index']);

Route::get('/api/processor',[ProcessorController::class, 'index']);

Route::get('/api/storagedevice',[StorageDeviceController::class, 'index']); //rotas OK

Route::get('/api/powersupply',[PowerSupplyController::class, 'index']);

Route::get('/api/rammemory',[RamMemoryController::class, 'index']);



