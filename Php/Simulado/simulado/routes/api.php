<?php

use App\Http\Controllers\AlaApiController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\MotherBoardController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\RamMemoryController;
use App\Http\Controllers\StorageDeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
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
//todas as rotas retornam um objeto json, agora so precisa fazer autenticação -> isso para a api
Route::get('alatech/graphiccard',[GraphicCardController::class, 'index']); //Rotas ok

Route::get('alatech/motherboard',[MotherBoardController::class, 'index']);

Route::get('alatech/processor',[ProcessorController::class, 'index']);

Route::get('alatech/storagedevice',[StorageDeviceController::class, 'index']); //rotas OK

Route::get('alatech/powersupply',[PowerSupplyController::class, 'index']);

Route::get('alatech/rammemory',[RamMemoryController::class, 'index']);

Route::get('alatech/montarmaquina', [MaquinaController::class, 'index']);

