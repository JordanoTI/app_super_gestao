<?php

use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Type\Integer;

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

Route::get('/', 'PrincipalController@principal');

Route::get('/contato', 'ContatoController@contato');

Route::get('/sobrenos', 'SobreNosController@sobrenos');

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function (string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Retorno do Json: $nome - $categoria - $assunto - $mensagem";
});
