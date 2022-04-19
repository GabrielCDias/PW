<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedoresController;


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

Route::get('/clientes/alterar/{id}', [ClientesController::class, 'alterar'])->name('clientes_alterar');

Route::post('/clientes/alterar/', [ClientesController::class, 'salvar'])->name('clientes_salvar');

Route::get('/clientes/excluir/{id}', [ClientesController::class, 'excluir'])->name('clientes_excluir');


Route::get('/produtos/novo',[ProdutosController::class,'produtos_novo']);

Route::post('/produtos/novo',[ProdutosController::class, 'produtos'])->name('produtos_novo');

Route::get('/produtos/listar', [ProdutosController::class, 'pListar'])->name('produtos_listar');

Route::get('/produtos/alterar/{id}', [ProdutosController::class, 'pAlterar'])->name('produtos_alterar');

Route::post('/produtos/alterar/', [ProdutosController::class, 'pSalvar'])->name('produtos_salvar');

Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'pExcluir'])->name('produtos_excluir');


Route::get('/fornecedores/novo', [FornecedoresController::class, 'fornecedores_novo']);

Route::post('/fornecedores/novo', [FornecedoresController::class, 'fornecedores'])->name('fornecedores_novo');

Route::get('/fornecedores/listar', [FornecedoresController::class, 'fListar'])->name('fornecedores_listar');

Route::get('/fornecedores/produtos', [ProdutosController::class, 'produtos_fornecedor'])->name('fornecedores_produtos');

Route::get('/fornecedores/alterar/{id}', [FornecedoresController::class, 'fAlterar'])->name('fornecedores_alterar');

Route::post('/fornecedores/alterar/', [FornecedoresController::class, 'fSalvar'])->name('fornecedores_salvar');

Route::get('/fornecedores/excluir/{id}', [FornecedoresController::class, 'fExcluir'])->name('fornecedores_excluir');
