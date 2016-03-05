<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/', function () {
    	return view('welcome');
	});


    Route::get('suppliers', 'SupplierController@index');
    Route::get('suppliers/cadastro', 'SupplierController@cadastro');
    Route::post('suppliers/salvar', 'SupplierController@salvar');
    Route::get('suppliers/mostrar', array('as' => 'mostrar', 'uses' => 'SupplierController@mostrar'));
    Route::get('suppliers/exibir/{supplier}', 'SupplierController@exibir');
    Route::get('suppliers/{supplier}/editar', array('as' => 'editar', 'uses' => 'SupplierController@editar'));
    Route::patch('suppliers/{supplier}/alterar', 'SupplierController@alterar');
    Route::delete('suppliers/{supplier}/deletar', 'SupplierController@deletar');

    Route::get('products', 'ProductController@index');
    Route::get('products/cadastro', 'ProductController@cadastro');
    Route::post('products/salvar', 'ProductController@salvar');
    Route::get('products/mostrar', array('as' => 'mostrarprod', 'uses' => 'ProductController@mostrar'));
    Route::get('products/{product}/editar', array('as' => 'editarprod', 'uses' => 'ProductController@editar'));
    Route::patch('products/{product}/alterar', 'ProductController@alterar');
    Route::delete('products/{product}/deletar', 'ProductController@deletar');


});
