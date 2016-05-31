<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::group(['prefix' => 'provas'], function() {
        Route::get('/', ['as' => 'provas', 'uses' => 'ProvasController@index']);
        Route::post('/', ['as' => 'provas.store', 'uses' => 'ProvasController@store']);
        Route::get('{id}/destroy', ['as' => 'provas.destroy', 'uses' => 'ProvasController@destroy']);
        Route::get('/create', ['as' => 'provas.create', 'uses' => 'ProvasController@create']);
    });


    Route::get('bancas', ['as' => 'bancas', 'uses' => 'BancaController@index']);
    Route::post('bancas', 'BancaController@store');
    Route::get('bancas/create', ['as' => 'bancas.create', 'uses' => 'BancaController@create']);
    Route::get('bancas/{id}/destroy', ['as' => 'bancas.destroy', 'uses' => 'BancaController@destroy']);
    Route::get('bancas/{id}/edit', ['as' => 'bancas.edit', 'uses' => 'BancaController@edit']);
    Route::post('bancas/{id}/update', ['as' => 'bancas.update', 'uses' => 'BancaController@update']);


    Route::get('questoes', ['as' => 'questoes', 'uses' => 'QuestoesController@index']);
    Route::get('questoes/create/{id}', ['as' => 'questoes.create', 'uses' => 'QuestoesController@create']);

    Route::get('usuarios', ['as' => 'usuarios', 'uses' => 'UsuariosController@index']);
    Route::post('usuarios', ['as' => 'usuarios.store', 'uses' => 'UsuariosController@store']);
});


route::get('bancas/{banca}', function (Questions\Banca $banca) {

    return $banca->descricao;
});







// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', function() {

    return redirect()->route('provas');
});

Route::get('/', 'HomeController@index');
