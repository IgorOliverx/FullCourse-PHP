<?php

use App\Http\Controllers\AlaApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\MotherBoardController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\RamMemoryController;
use App\Http\Controllers\StorageDeviceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function(){
    Route::get('/login', [AuthController::class, 'mostrarLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // Route::get('/login', [AuthController::class, 'logout']);
});


//POR FAVOR FUNCIONA -> Depois de adicionar no middleware criei um grupo de função com o parametro 'auth', feito no Authenticate no middleware
Route::middleware('auth')->group(function(){
    Route::get('/machines', [MachineController::class, 'card']);
    Route::get('/processor', [ProcessorController::class, 'card']); //ok(listando entidades)
    Route::get('/motherboard', [MotherBoardController::class, 'card']); //ok(listando entidades)
    Route::get('/rammemory', [RamMemoryController::class, 'card']);//ok (listando entidades)
    Route::get('/storagedevice', [StorageDeviceController::class, 'card']);//ok (listando entidades)
    Route::get('/graphiccard', [GraphicCardController::class, 'card']);//ok(listando entidades)
    Route::get('/powersupply', [PowerSupplyController::class, 'card']);//ok(listando entidades)



});



