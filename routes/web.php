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
        
        // Login
        Route::get('login','LoginController');
        
        // Logout
        Route::get('logout','LogoutController');

        // Retorna as Lojas Cadastradas
        Route::get('minhaslojas','MinhasLojasController@index');
        Route::get('minhaslojas/{slug}','MinhasLojasController@show');

        // Retorna as Anuncios
        Route::get('meusanuncios','MeusAnunciosController@index');
        Route::get('meusanuncios/{slug}','MeusAnunciosController@show');

        // Sobre Nos
        Route::view('sobre','site.sobre.index');
    }
); 