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

use App\Http\Controllers\TodosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos','ToDosController@index');

Route::get('/todos/{todo}','ToDosController@show');

Route::get('new-todos','ToDosController@create');

Route::post('store-todos','ToDosController@store');

Route::get('todos/{todoId}/edit','ToDosController@edit');

Route::post('todos/{todoId}/update-todos','ToDosController@update');

Route::get('todos/{todoId}/delete','ToDosController@destroy');

Route::get('todos/{todoId}/complete','ToDosController@complete');
