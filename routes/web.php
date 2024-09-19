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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function () {
    return 'Oi Michael Assunção';
});

Route::get('teste', function () {
    return [
        'nome' => 'Joaozinho',
        'sobrenome' => 'Silva',
    ];
    
});

Route::get('/user/{id}', function ($id) {
    return $id;
});

Route::get('/user/{id}/{nome}', function ($id,$nome) {
    return $id.' - '.$nome;
});

Route::get('/user/{id?}', function ($id = null) {
    return $id;
}) ->name('users');

Route::prefix('usuarios')->group (function () {
    Route::get('', function () {
        return 'Usuário';
    });
    Route::get('/{id}', function ($id) {
        return 'Mostra detalhes do usuário';
    });
    Route::get('/{id}/{permissao}', function ($id,$permissao) {
        return 'Permissões de usuário';
    });

});

Route::get('user/{user}', function (\App\Models\User $user) {
    return $user;
});

Route::get('user/{user:email}', function (\App\Models\User $user) {
    return $user;
});
