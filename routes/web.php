<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CondicaoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\TipoArmaController;
use App\Http\Controllers\TipoMunicaoController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ArmasController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/condicao', CondicaoController::class);
Route::resource('/cargo', CargoController::class);
Route::resource('/tipoArma', TipoArmaController::class);
Route::resource('/tipoMunicao', TipoMunicaoController::class);
Route::resource('/veiculo', VeiculoController::class);
Route::resource('/arma', ArmasController::class);
Route::resource('/usuario', UsuarioController::class);



