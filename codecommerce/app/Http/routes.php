<?php

//
//
//
//Rotas de Categorias

Route::get('admin/categories', ['as' => 'categories', 'uses' => 'AdminCategoriesController@index']);
Route::get('admin/categories/create', ['as' => 'categorias.create', 'uses' => 'AdminCategoriesController@create']);
Route::POST('admin/categories/store', ['as' => 'categorias.store', 'uses' => 'AdminCategoriesController@store']);
Route::get('admin/categories/{id}/destroy', ['as' => 'categorias.destroy', 'uses' => 'AdminCategoriesController@destroy']);
Route::get('admin/categories/{id}/edit', ['as' => 'categorias.edit', 'uses' => 'AdminCategoriesController@edit']);
Route::post('admin/categories/{id}/update', ['as' => 'categorias.update', 'uses' => 'AdminCategoriesController@update']);
Route::post('/admin/categories', 'AdminCategoriesController@store');


//
//
//
//Rotas de Products

Route::get('admin/products', ['as' => 'products', 'uses' => 'AdminProductsController@index']);

//
//
//
//Rotas de Home
Route::get('/', function() {

    return 'Home';
});



