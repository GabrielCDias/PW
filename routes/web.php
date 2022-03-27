<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/clientes/novo',[ClientesController::class,'cadastro_novo']);

Route::post('/clientes/novo',[ClientesController::class, 'novo'])->name('clientes_novo');

Route::get('/clientes/listar', [ClientesController::class, 'listar'])->name('clientes_listar');



Route::get('/produtos/novo',[ProdutosController::class,'produtos_novo']);

Route::post('/produtos/novo',[ProdutosController::class, 'produtos'])->name('produtos_novo');

Route::get('/produtos/listar', [ProdutosController::class, 'pListar'])->name('produtos_listar');