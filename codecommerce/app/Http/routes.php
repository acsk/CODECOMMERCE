<?php
//
//
//
//Rotas de Categorias
Route::group(['prefix' => 'admin/categories'], function () {
    
    Route::get('/', ['as' => 'categories', 'uses' => 'AdminCategoriesController@index']);
    Route::get('/create', ['as' => 'categorias.create', 'uses' => 'AdminCategoriesController@create']);
    Route::POST('/store', ['as' => 'categorias.store', 'uses' => 'AdminCategoriesController@store']);
    Route::get('/{id}/destroy', ['as' => 'categorias.destroy', 'uses' => 'AdminCategoriesController@destroy']);
    Route::get('/{id}/edit', ['as' => 'categorias.edit', 'uses' => 'AdminCategoriesController@edit']);
    Route::post('/{id}/update', ['as' => 'categorias.update', 'uses' => 'AdminCategoriesController@update']);
    Route::post('/', 'AdminCategoriesController@store');
    
    
});

//
//
//
//Rotas de Products
Route::group(['prefix' => 'admin/products'], function () {
Route::get('/', ['as' => 'products', 'uses' => 'AdminProductsController@index']);
Route::get('/create', ['as' => 'products.create', 'uses' => 'AdminProductsController@create']);
Route::post('/store', ['as' => 'products.store', 'uses' => 'AdminProductsController@store']);
Route::get('/{id}/edit', ['as' => 'products.edit', 'uses' => 'AdminProductsController@edit']);
Route::get('/{id}/destroy', ['as' => 'products.destroy', 'uses' => 'AdminProductsController@destroy']);
Route::post('/{id}/update', ['as' => 'products.update', 'uses' => 'AdminProductsController@update']);
});
//
//
//
//Rotas de Home
Route::get('/', function() {

    return 'Home';
});



