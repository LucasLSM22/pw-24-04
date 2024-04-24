<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/fornecedores', 'FornecedorController@index')->name('site.fornecedor');
 
Route::prefix('/app')->group(function(){
    Route::get('/fornecedores', 'FornecedorController@index')->name('site.fornecedor');
});
 
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');
 
Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index'). '">clique aqui</a> para ir para a pagina inicial';
});
