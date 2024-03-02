<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ClienteController::class,'showHome'])->name('home');
Route::get('/cadastro-cliente',[ClienteController::class,'showFormularioCadastro'])->name('show-formulario-cadastro');
Route::post('/cadastro-cliente',[ClienteController::class,'cadCliente'])->name('envia-banco-cliente');
Route::get('/cadastro-funcionario',[FuncionarioController::class,'showFormularioCadastro'])->name('show-formulario-cadastro');;
Route::post('/cadastro-funcionario',[FuncionarioController::class,'cadFuncionario'])->name('envia-banco-funcionario');
Route::get('/cadastro-quarto',[QuartoController::class,'showFormularioCadastro'])->name('show-formulario-cadastro');
Route::post('/cadastro-quarto',[QuartoController::class,'cadQuarto'])->name('envia-banco-quarto');