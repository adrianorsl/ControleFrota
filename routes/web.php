<?php

use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CondicaoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\TipoArmaController;
use App\Http\Controllers\TipoMunicaoController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ArmasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OcorrenciaController;
use App\Http\Controllers\CarrocheckController;
use App\Http\Controllers\MunicoesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;

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
    return view('/home');
});

Route::resource('/condicao', CondicaoController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::resource('/cargo', CargoController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::resource('/tipoArma', TipoArmaController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::resource('/tipoMunicao', TipoMunicaoController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::resource('/municoes', MunicoesController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::resource('/veiculo', VeiculoController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::resource('/arma', ArmasController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::resource('/usuario', UsuarioController::class)->middleware(App\Http\Middleware\Autenticador::class);;
Route::resource('/ocorrencia', OcorrenciaController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::resource('/carrocheck', CarrocheckController::class)->middleware(App\Http\Middleware\Autenticador::class);
Route::get('/login', [LoginController::class, 'index'])->name(name: 'login');
Route::post('/login', [LoginController::class, 'store'])->name(name: 'signin');
Route::get('/logout', [LoginController::class, 'destroy'])->name(name: 'logout');

Route::get('/register', [UsersController::class, 'create'])->name(name: 'users.create');
Route::post('/register', [UsersController::class, 'store'])->name(name: 'users.store');

