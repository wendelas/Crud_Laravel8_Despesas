<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Aqui é onde eu registrei as rotas da web . Essas
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Get para fazer as listagem seguido da
indicação de qual controller usar.
*/


Route::get('/despesas', function () {
    return view('despesas');
});

Route::get('/', function () {   
    return view('welcome')->name('index');
});


Route::get('/teste', 'App\Http\Controllers\UserController@index')->name('login');
Route::post('/teste', 'App\Http\Controllers\UserController@autenticar');
// abaixo definir a rota da url e direcionei para um controle // 
Route::resource('despesas', "App\Http\Controllers\DespesasController");


/* 
Declarando a Rota. Chamando o controller. Informando qual chamada

Route::get('/despesa', 'DespesaController@index');

*/