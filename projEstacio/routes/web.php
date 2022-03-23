<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtoController;

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
    return view('index');
});

// produtos
Route::get('/produtos', [produtoController::class, 'index']);
Route::get('/produtos/new', function () {
    return view('/produtos/newProduto');
});
Route::post('/produtos', [produtoController::class, 'salvar']);
Route::get('/produto/{id}', [produtoController::class, 'mostrar']);
Route::put('/produto/{id}', [produtoController::class, 'editar']);
Route::delete('/produto/{id}', [produtoController::class, 'remover']);


//estoque

