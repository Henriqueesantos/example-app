<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachinesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/listar-maquinas', [\App\Http\Controllers\MachinesController::class, 'index']);
Route::get('/visualizar-maquina', [\App\Http\Controllers\MachinesController::class, 'show']);
Route::get('/cadastrar-maquina', [\App\Http\Controllers\MachinesController::class, 'create']);
Route::post('/cadastrar-maquina', [\App\Http\Controllers\MachinesController::class, 'store']);
*/

Route::resource('machines', MachinesController::class);


