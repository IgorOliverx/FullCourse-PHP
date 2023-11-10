<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\MotherBoardController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\RamMemoryController;
use App\Http\Controllers\StorageDeviceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});




//Route::post('/login', 'AuthController@login')->name('login');
Route::post('/login', [AuthController::class, 'login']);

//todas as rotas retornam um objeto json, agora so precisa fazer autenticação
Route::get('/api/graphiccard',[GraphicCardController::class, 'index']); //Rotas ok

Route::get('/api/motherboard',[MotherBoardController::class, 'index']);

Route::get('/api/processor',[ProcessorController::class, 'index']);

Route::get('/api/storagedevice',[StorageDeviceController::class, 'index']); //rotas OK

Route::get('/api/powersupply',[PowerSupplyController::class, 'index']);

Route::get('/api/rammemory',[RamMemoryController::class, 'index']);

