<?php


//Rotas de Categorias
Route::get('categorias',['as'=>'categorias','uses'=>'CategoryController@index']);
Route::get('categorias/create',['as'=>'categorias.create','uses'=>'CategoryController@create']);
Route::POST('categorias/store',['as'=>'categorias.store','uses'=>'CategoryController@store']);
Route::get('categorias/{id}/destroy',['as'=>'categorias.destroy','uses'=>'CategoryController@destroy']);
Route::get('categorias/{id}/edit',['as'=>'categorias.edit','uses'=>'CategoryController@edit']);

Route::post('categorias/{id}/update',['as'=>'categorias.update','uses'=>'CategoryController@update']);


Route::post('/categorias','CategoryController@store');
Route::get('/', function(){

    return 'Home';
});



