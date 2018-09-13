<?php

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

Route::get('/', 'IndexController@index');

Route::get('/produtos', 'ProdutoController@index');

Route::group(['prefix' => 'user'], function(){

	Route::get('/post', 'UserController@index');
	Route::get('/comment', function(){
		return '<h1>Comments</h1>';
	});

});
