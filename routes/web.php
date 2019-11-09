<?php

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

Route::get('/',function(){
    return view('index');
});
//gambiarra
Route::get('/categoria/delete/{id}','CategoriaController@destroy');
Route::post('categoria/{categorium}', 'CategoriaController@update');
Route::get('/produto/delete/{id}','ProdutoController@destroy');
Route::post('/produto/{categorium}', 'ProdutoController@update');

Route::resource('produto', 'ProdutoController');
Route::resource('categoria', 'CategoriaController');

