<?php

use Illuminate\Support\Facades\Route;

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
 
Route::namespace('Site')->group(
    function () {
        // Pagina Inicial
        Route::get('/','HomeController');

        // Retorna os Produtos Cadastrados
        Route::get('produtos','ProductsController@index');
        Route::get('produtos/{slug}','ProductsController@show');

        // Sobre Nos
        Route::view('sobre','site.sobre.index');

        // Fale conosco
        Route::get('contato','ContactController@index');
        Route::post('contato','ContactController@contactclear');
    }
);
